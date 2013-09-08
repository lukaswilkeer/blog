<?php 
class Singleton
{
    private static $instance;
    private function __construct() {}
    private function __clone() {}

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new self;
        }
        return self::$instance;
    }
}
?>
