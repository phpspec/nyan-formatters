<?php

namespace PhpSpec\NyanFormattersExtension\Formatter;

/**
 * RatFormatter
 *
 * @package NyanFormattersExtension
 *
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class RatFormatter extends NyanFormatter
{
    protected $states =
        array(
            array(
                '  ~       ~ ',
                '     ~      ',
                ' ~  ___  ~ ~',
                ' __/_  \☊☊_ ',
                '/  \_}__}__>',
                '\__ W   W   '
            ),
            array(
                '     ~      ',
                ' ~       ~ ~',
                '~ ~ ___ ~    ',
                ' __/_  \☊☊_ ',
                '/  \_}__}__>',
                '\_/ M   M   '
            ),
            array(
                ' ~       ~ ~',
                '~ ~  ~  ~   ',
                '    ___    ~',
                ' __/_  \☊☊_ ',
                '/  \_}__}__>',
                '\__ W   W   '
            )
        );
}
