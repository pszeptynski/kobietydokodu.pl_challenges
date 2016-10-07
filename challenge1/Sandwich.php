<?php

class Sandwich {

    public static function getSandwich($ingredients) {
        $result = "";
        $teststring = "/.*bread(.+)bread.*/";
        if (preg_match($teststring, $ingredients, $between)) {
            return $between[1];
        }
        return $result;
    }

}

// non TDD checks
//echo Sandwich::getSandwich("breadEGGbread") . "</br>";
//echo Sandwich::getSandwich("breadbread") . "</br>";
//echo Sandwich::getSandwich("xxxbreadBACONbreadyyy") . "</br>";

?>
