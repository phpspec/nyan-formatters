<?php

namespace PhpSpec\NyanFormattersExtension\Formatter;

/**
 * DeadRatFormatter
 *
 * @package NyanFormattersExtension
 *
 * @author Piotr Walków <walkowpiotr@gmail.com>
 */
class DeadRatFormatter extends NyanFormatter
{
    protected $states =
        array(
            array(
                '~  ~    ~   ',
                ' ~    ~     ',
                ' _ ~ ~  ~  ~',
                '/ \ M___M__ ',
                '\__/_}  _} >',
                '   \____/ȣȣ ',
            ),
            array(
                ' ~    ~     ',
                '   ~ ~  ~  ~',
                '~_    ~  ~  ',
                '/ \ M___M__ ',
                '\__/_}  _} >',
                '   \____/ȣȣ ',
            ),
            array(
                '   ~ ~  ~  ~',
                '~     ~  ~  ',
                ' _ ~        ',
                '/ \ M___M__ ',
                '\__/_}  _} >',
                '   \____/ȣȣ ',
            )
        );
}
