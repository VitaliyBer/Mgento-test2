<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 12:32
 */

namespace Training\Test\Controller\Action;


class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
}