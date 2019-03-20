<?php

namespace Elogic\Cms\Setup;


use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    private $blockFactory;

    public function __construct(BlockFactory $blockFactory)
    {
        $this->blockFactory = $blockFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $cmsBlockData = [
            [
                'title' => 'Header Panel Block',
                'identifier' => 'header_panel_block',
                'content' => "
<div class='header_more'>
            <p>Support the Boy Scouts of America! Every purchase supports the future of Scouting.&nbsp;
            <a href='#' class='panel_more'>Learn more</a>
            </p>
</div>
<div class='panel_msg'>
<p>
<a href='#'>FREE SHIPPING ON ALL U.S. ORDERS OVER $125</a>
</p>
</div>
                            ",
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0,
            ],
            [
                'title' => 'Contact Social Block',
                'identifier' => 'contact_social_block',
                'content' => "
 <div class='social_title'>Follow Us</div>
<div class='social_link'>      
    <div class='social_link--facebook'>
        <a href='#' class='social facebook'>
          <img src='{{view url='images/facebook.svg'}}'
                 alt='logo_facebook'>
        </a>
    </div>

    <div class='social_link--twitter'>
        <a href='#' class='social twitter'>
           <img src='{{view url='images/twitter-logo-button.svg'}}'
                 alt='logo_twitter'>
        </a>
    </div>

    <div class='social_link--instagram'>
        <a href='#' class='social instagram'>
           <img src='{{view url='images/instagram-logo.svg'}}'
                 alt='logo_instagram'>
        </a>
    </div>
</div>
                            ",
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0,
            ],
            [

                'title' => 'Contact Contacts Block',
                'identifier' => 'contact_contacts_block',
                'content' => "
<div class='footer_contact-items'>
                    <div class='contact_icon contact_items'>
                    <div class='item_phone'>
                    <a href='tel:1-800-323-0736' class='item_contact'>
                    <span class='item_title'>
                    1-800-323-0736</span>
                    <span class='item_text'>
                    Habla español? Por favor llamenos al</span>
</a>
</div>
</div>
<div class='contact_items'>
                    <div class='contact_icon item_email-block'>
                    <a href='#' class='item_email'>
                    <span class='item_title'>
                    Email</span>
                    <span class='item_text'>
                    Drop us a line any time.</span>
</a>
</div>
</div>
<div class='contact_items'>
                    <div class='contact_icon item_chat-block'>
                    <a href='#' class='item_chat'>
                    <span class='item_title'>
                    Live Chat</span>
                    <span class='item_text'>
                    Talk to a helpful rep now</span>
</a>
</div>
</div>
<div class='contact_items'>
                    <div class='contact_icon item_help-block'>
                    <a href='#' class='item_help'>
                    <span class='item_title'>
                    Help</span>
                    <span class='item_text'>
                    Browse our FAQ page</span>
</a>
</div>
</div>
</div>
                ",
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 1
            ],

            [
                'title' => 'Cms Links Block',
                'identifier' => 'cms_links_block',
                'content' => "
<div class='footer_link'>
                           <div class='footer_link-item'>
                           <h5>Support</h5>
                           <ul>
                           <li class='link-item'>
                           <a href='#'>My Account</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Track my Order</a>
</li>
                           <li class='link-item'>
                           <a href='#'>FAQs</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Sizing Charts</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Returns & Shipping</a>
</li>
</ul>
</div>
<div class='footer_link-item'>
                           <h5>Gift Cards</h5>
                           <ul>
                           <li class='link-item'>
                           <a href='#'>Purchase a Gift Card</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Check Your Balance</a>
</li>
</ul>
</div>
<div class='footer_link-item'>
                           <h5>About Scout Stuff</h5>
                           <ul>
                           <li class='link-item'>
                           <a href='#'>About Us</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Blog</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Careers</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Press & Media</a>
</li>
</ul>
</div>
</div>
                            ",
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0,
            ],
            [
                'title' => 'Cms Resources Block',
                'identifier' => 'cms_resources_block',
                'content' => "
<div class='resources_link' id='resources_link'>
<div data-role='collapsible' class='title'>
<div data-role='trigger'>
                           <span>Partners</span>
                           <span class='opened'>-</span>
                           <span class='closed'>+</span>
                          
 </div>
</div>
<div data-role='content' class='resources_link-items'>
                           <ul>
                           <li class='link-item'>
                           <a href='#'>Distributor</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Licensing</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Affiliates</a>
</li>
</ul>
</div>
                          
                           <div data-role='collapsible' class='title'>
<div data-role='trigger'>
                           <span>Resources</span>
                           </div>
                           </div>
                           <div data-role='content' class='resources_link-items'>
                           <ul>
                           <li class='link-item'>
                           <a href='#'>Join Scouting</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Scouting.org</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Boys life</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Scout Book</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Alumni</a>
</li>
                           <li class='link-item'>
                           <a href='#'>NESA</a>
</li>
</ul>
</div>
<div data-role='collapsible' class='title'>
<div data-role='trigger'>
 
                           <span>Programs</span>
                           
                           </div>
                           </div>
                            <div data-role='content' class='resources_link-items'>
                           <ul>
                           <li class='link-item'>
                           <a href='#'>Cub Scout</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Boy Scout</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Venturing</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Sea Scout</a>
</li>
                           <li class='link-item'>
                           <a href='#'>Exploring</a>
</li>
</ul>
</div>
</div>
                            ",
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0,
            ],
            [
                'title' => 'Cms Shipping Block',
                'identifier' => 'cms_shipping_block',
                'content' => "
<div class='footer_support'>
<div class='support_scouts'>
<a href='#' class='support_title'>Support the Boy Scouts</a>
<a href='#' class='support_text'>XX% off all ScoutStuff sales are donated to the Boy Scouts of America</a>
</div> 
<div class='support_shipping'>
<a href='#' class='shipping_title'>Free Shipping</a>
<a href='#' class='shipping_text'>Enjoy free shipping on all orders over $100</a>
</div> 
<div class='support_returns'>
<a href='#' class='returns_title'>Hassle Free Returns</a>
<a href='#' class='returns_text'>Not 100% satisfied? It`s easy to return or exchange any item</a>
</div>                         
</div>
                            ",
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0,
            ],
            [
                'title' => 'Cms Copyright Block',
                'identifier' => 'cms_copyright_block',
                'content' => "
<div class='footer_copyright'>
                       <p>Boy Scouts of America | National Supply Group</p>
                       <p>P.O. BOX 7143</p>
                       <p>Charlotte, NC 28241-7143</p>
                       <p>Privacy Policy | Terms and Conditions</p>
</div>
                            ",
                'is_active' => 1,
                'stores' => [0],
                'sort_order' => 0,
            ],
        ];

        foreach ($cmsBlockData as $BlockData) {
            $this->blockFactory->create()->setData($BlockData)->save();

        }

    }
}