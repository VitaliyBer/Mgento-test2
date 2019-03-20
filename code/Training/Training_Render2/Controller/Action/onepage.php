<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 05.03.19
 * Time: 11:07
 */

namespace Training\Training_Render2\Controller\Action;

use Magento\Framework\Controller\ResultFactory;


class onepage extends \Magento\Framework\App\Action\Action
{
    public function execute() {

        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}