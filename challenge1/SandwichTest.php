<?php

include("Sandwich.php");

class getSandwichTest extends PHPUnit_Framework_TestCase {

    public function testNoBreadPiece() {
        $this->assertEquals("", Sandwich::getSandwich("eggBACONcheese"));
    }

    public function testOneBreadPiece() {
        $this->assertEquals("", Sandwich::getSandwich("justonepieceofbreadininput"));
    }

    public function testEggInBetween() {
        $this->assertEquals("egg", Sandwich::getSandwich("breadeggbread"));
    }

    public function testIngredientMix() {
        $this->assertEquals("BACON", Sandwich::getSandwich("EGGbreadBACONbreadCHEESE"));
    }

}

?>