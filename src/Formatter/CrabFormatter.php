<?php

namespace PhpSpec\NyanFormattersExtension\Formatter;

/**
 * CrabFormatter
 *
 * @package NyanFormattersExtension
 *
 * @author Matthew Davis <matt@mattdavis.co.uk>
 */
class CrabFormatter extends NyanFormatter
{
    protected $states =
        array(
            array(
                '|  |        ',
                ' \/        Y',
                ' |  /%-%\  |',
                '  \|     |/ ',
                '   _\___/_  ',
                '  / /   \ \ '
            ),
            array(
                ' /\         ',
                ' \/        Y',
                ' |  /%-%\  |',
                '  \|     |/ ',
                '   _\___/_  ',
                '  / /   \ \ '
            ),
            array(
                ' /\         ',
                ' \/        |',
                ' |  /%-%\  |',
                '  \|     |/ ',
                '   _\___/_  ',
                '  / /   \ \ '
            ),
        );
}
