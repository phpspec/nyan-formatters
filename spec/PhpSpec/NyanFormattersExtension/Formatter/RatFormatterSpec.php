<?php

namespace spec\PhpSpec\NyanFormattersExtension\Formatter;

use PhpSpec\Console\ConsoleIO;
use PhpSpec\Formatter\Presenter\Presenter;
use PhpSpec\Listener\StatisticsCollector;
use PhpSpec\NyanFormattersExtension\Formatter\RatFormatter;
use PhpSpec\ObjectBehavior;

/**
 * RatFormatterSpec
 *
 * @package spec\PhpSpec\NyanFormattersExtension\Formatter
 *
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class RatFormatterSpec extends ObjectBehavior
{
    function let(
        Presenter $presenter,
        ConsoleIO $io,
        StatisticsCollector $stats
    ) {
        $this->beConstructedWith($presenter, $io, $stats);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(RatFormatter::class);
    }

}
