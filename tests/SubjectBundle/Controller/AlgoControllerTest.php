<?php

namespace tests\SubjectBundle\Controller;

use SubjectBundle\Controller\AlgoController;

class AlgoControllerTest extends \PHPUnit\Framework\TestCase
{
    private $controller;

    public function __construct()
    {
        $this->controller = new AlgoController(4,3);
    }

    public function testInit()
    {
        $this->assertEquals(true, true);
    }

    public function test1() {
        $series = [
            2005=>'How I met your mother',
            1985=>'MacGyver',
            1994=>'Friends',
            1997=>'Buffy',
            2011=>'Game of thrones',
            1978=>'Dallas',
        ];
        $this->assertEquals (9, $this->controller->dateInterval($series));
    }

    public function test2() {
        $series = [
            2005=>'How I met your mother',
            2008=>'Breaking bad',
            2005=>'Prison Break',
        ];
        $this->assertEquals (3, $this->controller->dateInterval($series));
    }

    public function test3() {
        $series = [
            1978=>'Dallas',
            2010=>'Sherlock',
        ];
        $this->assertEquals (32, $this->controller->dateInterval($series));
    }

}