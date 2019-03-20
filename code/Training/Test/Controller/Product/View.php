<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 12:36
 */

namespace Training\Test\Controller\Product;


class View extends \Magento\Framework\App\Action\Action
{

    public function execute() {
    echo "ONE"; exit;
    }
    public function beforeExecute() {
    echo "BEFORE<BR>"; exit;
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller,
    $result) {
    echo "AFTER"; exit;
    }
}