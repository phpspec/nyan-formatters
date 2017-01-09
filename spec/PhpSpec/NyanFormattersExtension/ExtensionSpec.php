<?php

namespace spec\PhpSpec\NyanFormattersExtension;

use PhpSpec\NyanFormattersExtension\Extension;
use PhpSpec\Extension as PhpSpecExtension;
use PhpSpec\ObjectBehavior;
use PhpSpec\ServiceContainer;

/**
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class ExtensionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Extension::class);
        $this->shouldImplement(PhpSpecExtension::class);
    }

    function it_loads_formatters(
        ServiceContainer $container
    ) {
        $this->load($container, []);
    }
}
