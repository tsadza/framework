<?php

namespace Kraken\Console\Client\Command;

use Kraken\Promise\PromiseInterface;

interface CommandHandlerInterface
{
    /**
     * @param string|null $commandParent
     * @param string $commandName
     * @param string[] $commandParams
     * @return PromiseInterface
     */
    public function handle($commandParent, $commandName, $commandParams = []);
}