<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 14:37
 */

namespace Training\Test\Block;


class Test extends \Magento\Framework\View\Element\AbstractBlock
{
    protected function _toHtml()
    {
        return "<b>Hello word from block</b>";
    }
}