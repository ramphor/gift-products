<?php
/**
 * Plugin Name: Ramphor Gift Products
 * Plugin URI: https://github.com/ramphor/gift-products
 * Author: Puleeno Nguyen
 * Author URI: https://puleeno.com
 * Version: 1.0.0
 */

use Ramphor\GiftProducts\GiftProducts;

if (!class_exists(GiftProducts::class)) {
    $composer_autoload = sprintf('%s/vendor/autoload.php', dirname(__FILE__));
    if (file_exists($composer_autoload)) {
        require_once $composer_autoload;
    }
}

if (class_exists(GiftProducts::class)) {
    $GLOBALS['gift_products'] = GiftProducts::get_instance();
    $GLOBALS['gift_products']->init();
}