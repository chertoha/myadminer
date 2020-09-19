<?php

namespace functions;
/**
 * Description of Myfunctions
 *
 * @author Anton
 */
abstract class MyFunctions {

    
    public static function vardump($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
    
    public static function arr_print($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }

}
