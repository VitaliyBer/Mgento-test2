<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 01.03.19
 * Time: 10:55
 */

namespace Unit1\FirstModule\Plugin;



class Breadcrumbs
{
    public function afterAddCrumb ()
    {
        return ("(!)");

    }
}