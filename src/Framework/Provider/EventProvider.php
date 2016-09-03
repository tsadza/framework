<?php

namespace Kraken\Framework\Provider;

use Kraken\Container\ContainerInterface;
use Kraken\Core\Service\ServiceProvider;
use Kraken\Core\Service\ServiceProviderInterface;
use Kraken\Event\EventEmitter;

class EventProvider extends ServiceProvider implements ServiceProviderInterface
{
    /**
     * @var string[]
     */
    protected $requires = [
        'Kraken\Loop\LoopInterface'
    ];

    /**
     * @var string[]
     */
    protected $provides = [
        'Kraken\Event\EventEmitterInterface'
    ];

    /**
     * @param ContainerInterface $container
     */
    protected function register(ContainerInterface $container)
    {
        $emitter = new EventEmitter(
            $container->make('Kraken\Loop\LoopInterface')
        );

        $container->instance(
            'Kraken\Event\EventEmitterInterface',
            $emitter
        );
    }

    /**
     * @param ContainerInterface $container
     */
    protected function unregister(ContainerInterface $container)
    {
        $container->remove(
            'Kraken\Event\EventEmitterInterface'
        );
    }
}
