<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 14:41
 */

namespace Training\Test\Controller\Block;


class Index extends \Magento\Framework\App\Test\Unit\Action\Action
{
  public function execute() {
      $layout = $this->_view->getLayout();
      $block = $layout->createBlock('Training\Test\Block\Test');
      $this->getResponse()->appendBody($block->toHtml());
  }
}