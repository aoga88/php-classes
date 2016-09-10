<?php
class Test {
    public static $property;

    public static function method() {
    	return 'nigga';
    }

    public static function getProperty() {
	return self::$property;
    }
}

Test::$property = 'ok';
print_r(Test::method() . "\n");
print_r(Test::getProperty());
