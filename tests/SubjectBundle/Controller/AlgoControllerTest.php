<?php

namespace tests\SubjectBundle\Controller;

use SubjectBundle\Controller\AlgoController;

class AlgoControllerTest extends \PHPUnit\Framework\TestCase
{
    private $controller;

    public function __construct()
    {
        $this->controller = new AlgoController();
    }

    public function testInit()
    {
        $this->assertEquals(true, true);
    }

    public function test1() {
        $this->assertEquals ("il fait chaud", $this->controller->strlenOrder("il fait chaud", "ASC"));
    }

    public function test2() {
        $this->assertEquals ("chaud fait il", $this->controller->strlenOrder("il fait chaud", "DESC"));
    }

    public function test3() {
        $this->assertEquals ("il est fort super", $this->controller->strlenOrder("il est super fort", "ASC"));
    }

    public function test4() {
        $this->assertEquals ("super fort est il", $this->controller->strlenOrder("il est super fort", "DESC"));
    }

    public function test5() {
        $this->assertEquals ("un coûte combien portable ordinateur", $this->controller->strlenOrder("combien coûte un ordinateur portable", "ASC"));
    }

    public function test6() {
        $this->assertEquals ("ordinateur portable combien coûte un", $this->controller->strlenOrder("combien coûte un ordinateur portable", "DESC"));
    }
}