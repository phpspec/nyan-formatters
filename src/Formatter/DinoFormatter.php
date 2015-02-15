<?php

namespace PhpSpec\NyanFormattersExtension\Formatter;

/**
 * DinoFormatter
 * Rawwr!
 *
 * @package NyanFormattersExtension
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 * @author Matthew Davis <matt@mattdavis.co.uk>
 */
class DinoFormatter extends NyanFormatter
{
    protected $states =
        array(
            array(
                '              ___  ',
                '             / %_) ',
                '     _.----./ /    ',
                '    /        /     ',
                ' __/ (  | (  |     ',
                "/__.-'|_|--|_|     "
            ),
            array(
                '               ___ ',
                '              / %_)',
                '     _.----._/ /   ',
                '    /         /    ',
                ' __/ (  | (  |     ',
                "/__.-|_|--|_|      "
            ),
            array(
                '              ___  ',
                '             / %_) ',
                '    _.----._/ /    ',
                '   /         /     ',
                ' _/ (  / /  /      ',
                "/_/-|_/--|_/       "
            )
        );
}
