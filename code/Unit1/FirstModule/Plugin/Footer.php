<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 10:35
 */

namespace Unit1\FirstModule\Plugin;

//use Magento\Customer\Model\Context;


class Footer
{
 public function afterGetCopyright()
 {
     return ("Customized copyright!");
 }
}