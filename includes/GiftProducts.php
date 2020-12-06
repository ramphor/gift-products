<?php
namespace Ramphor\GiftProducts;

class GiftProducts {
    protected static $instance;
    public static function get_instance() {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
    }

    public function init()
    {
    }
}
