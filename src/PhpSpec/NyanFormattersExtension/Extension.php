<?php

namespace PhpSpec\NyanFormattersExtension;

use PhpSpec\Extension as PhpSpecExtension;
use PhpSpec\ServiceContainer;

/**
 * Extension
 *
 * @package NyanFormattersExtension
 *
 * @author Matthew Davis <matt@mattdavis.co.uk>
 */
class Extension implements PhpSpecExtension
{
    /**
     * {@inheritdoc}
     */
    public function load(ServiceContainer $container, array $params)
    {
        $this->addFormatter($container, 'cat', 'PhpSpec\NyanFormattersExtension\Formatter\NyanFormatter');
        $this->addFormatter($container, 'dino', 'PhpSpec\NyanFormattersExtension\Formatter\DinoFormatter');
        $this->addFormatter($container, 'crab', 'PhpSpec\NyanFormattersExtension\Formatter\CrabFormatter');
    }

    /**
     * Add a formatter to the service container
     *
     * @param ServiceContainer $container
     * @param string           $name
     * @param string           $class
     */
    protected function addFormatter(ServiceContainer $container, $name, $class)
    {
        $container->define('formatter.formatters.nyan.' . $name, function ($c) use ($class) {
            /** @var ServiceContainer $c */
            return new $class(
                $c->get('formatter.presenter'),
                $c->get('console.io'),
                $c->get('event_dispatcher.listeners.stats')
            );
        });
    }
}
