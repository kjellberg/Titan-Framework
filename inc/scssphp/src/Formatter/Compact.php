<?php
/**
 * SCSSPHP
 *
 * @copyright 2012-2015 Leaf Corcoran
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @link http://leafo.github.io/scssphp
 */

namespace TitanLeafo\ScssPhp\Formatter;

use TitanLeafo\ScssPhp\Formatter;

/**
 * SCSS compact formatter
 *
 * @author Leaf Corcoran <leafot@gmail.com>
 */
class Compact extends Formatter
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        $this->indentLevel = 0;
        $this->indentChar = '';
        $this->break = '';
        $this->open = ' {';
        $this->close = "}\n\n";
        $this->tagSeparator = ',';
        $this->assignSeparator = ':';
    }

    /**
     * {@inheritdoc}
     */
    public function indentStr($n = 0)
    {
        return ' ';
    }
}