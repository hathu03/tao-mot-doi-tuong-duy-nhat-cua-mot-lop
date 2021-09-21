<?php
class Application {
    private static Application $instance;
    private function __construct() {

    }
    public static function getInstance(): Application {
        if (self::$instance==null) {
            self::$instance=new Application();
            echo "hello";
        }
        return self::$instance;
    }
}
$app1 = Application::getInstance();
$app2 = Application::getInstance();