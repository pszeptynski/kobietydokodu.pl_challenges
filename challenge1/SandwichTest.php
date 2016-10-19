<?php

include("Sandwich.php");

class getSandwichTest extends PHPUnit_Framework_TestCase {

    public function testNoBreadPiece() {
        $expected = "";
        $testString = "eggBACONcheese";
        $this->assertEquals($expected, Sandwich::getSandwich($testString));
    }

    public function testOneBreadPiece() {
        $expected = "";
        $testString = "justonepieceofbreadininput";
        $this->assertEquals($expected, Sandwich::getSandwich($testString));
    }

    public function testEggInBetween() {
        $expected = "egg";
        $testString = "breadeggbread";
        $this->assertEquals($expected, Sandwich::getSandwich($testString));
    }

    public function testIngredientMix() {
        $expected = "BACON";
        $testString = "EGGbreadBACONbreadCHEESE";
        $this->assertEquals($expected, Sandwich::getSandwich($testString));
    }

    public function testTwoBreadPiecesOnly() {
        $expected = "";
        $testString = "breadbread";
        $this->assertEquals($expected, Sandwich::getSandwich($testString));
    }

    public function testEmptyInputString() {
        $expected = "";
        $testString = "";
        $this->assertEquals($expected, Sandwich::getSandwich($testString));
    }

    public function testManyBreadPieces() {
        $expected = "breadBACONbread";
        $testString = "breadbreadBACONbreadbread";
        $this->assertEquals($expected, Sandwich::getSandwich($testString));
    }

}

?>
