<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 28.02.19
 * Time: 18:05
 */

namespace Unit1\SecondModule\MagentoU;


class Test
{
    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        \Unit1\SecondModule\Api\ProductRepositoryInterface $unit1ProductRepository,
        $justAParameter2 = false,
        array $data
    ) {
    }
}