<?php

namespace Kraken\_Unit\Support;

use Kraken\_Unit\Support\_Mock\GeneratorSupportMock;
use Kraken\Support\GeneratorSupport;
use Kraken\Test\TUnit;

class GeneratorSupportTest extends TUnit
{
    /**
     *
     */
    public function testApiGenId_GeneratesUniqId()
    {
        $gen = $this->createGeneratorSupportMock();
        $prefix = 'test';

        $this->assertRegExp("#^$prefix([a-z0-9]*?)\.([a-z0-9]*?)$#si", $gen->genId($prefix));
    }

    /**
     * @return GeneratorSupport
     */
    public function createGeneratorSupportMock()
    {
        return new GeneratorSupportMock();
    }
}