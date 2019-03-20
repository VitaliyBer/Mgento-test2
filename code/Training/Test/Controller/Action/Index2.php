<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 15:48
 */

namespace Training\Test\Controller\Action;


class Index2 extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Training\Test\Block\Test');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}