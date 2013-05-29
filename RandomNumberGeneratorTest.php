<?php

include "./RandomNumberGenerator.php";

require_once './vendor/phpunit/phpunit/PHPUnit/Autoload.php';

/**
 * Created by JetBrains PhpStorm.
 * User: fernando
 * Date: 29/05/13
 * Time: 15:54
 * To change this template use File | Settings | File Templates.
 */

class RandomNumberGeneratorTest extends PHPUnit_Framework_TestCase
{

    // test con un solo elemento
    public function testWithOneElement()
    {
        $generateRandomNumbers = new RandomNumberGenerator();
        $resultBetween1and1 = $generateRandomNumbers->between(1, 1);
        $this->assertTrue(is_array($resultBetween1and1));
        $this->assertContains(1, $resultBetween1and1);
        $this->assertEquals(1, count($resultBetween1and1));
    }

    // test con un solo elemento diferente de 1 ( evitar problemas tontos de código )
    public function testWithOneElementDifferentFrom1()
    {
        $generateRandomNumbers = new RandomNumberGenerator();
        $resultBetween4and4 = $generateRandomNumbers->between(4, 4);
        $this->assertTrue(is_array($resultBetween4and4));
        $this->assertContains(4, $resultBetween4and4);
        $this->assertEquals(1, count($resultBetween4and4));

    }

    // test con varios elementos
    public function testWithSeveralElements()
    {
        $generateRandomNumbers = new RandomNumberGenerator();
        $resultBetween3and10 = $generateRandomNumbers->between(3, 10);
        $this->assertTrue(is_array($resultBetween3and10));
        for ($i = 3; $i <= 10; ++$i) {
            $this->assertContains($i, $resultBetween3and10);
        }
        $this->assertEquals(8, count($resultBetween3and10));
    }

    // test que debe fallar , ya que no hay elementos mayores que 7 y menores que 2
    public function testWithoutElements()
    {
        $generateRandomNumbers = new RandomNumberGenerator();
        $resultBetween3and1 = $generateRandomNumbers->between(7, 2);
        $this->assertTrue(is_array($resultBetween3and1));
        $this->assertEquals(0, count($resultBetween3and1));

    }


    public function testDisordered()
    {
        $generateRandomNumbers = new RandomNumberGenerator();
        $resultBetween3and10 = $generateRandomNumbers->disordered()->between(3, 10);
        $this->assertTrue(is_array($resultBetween3and10));
        for ($i = 3; $i <= 10; ++$i) {
            $this->assertContains($i, $resultBetween3and10);
        }
        $ordered = true;
        for ($i = 1; $i < count($resultBetween3and10) and $ordered == true; ++$i) {
            if ($resultBetween3and10[$i] != $resultBetween3and10[$i - 1] + 1) {
                $ordered = false;
            }
        }
        $this->assertFalse($ordered);
        $this->assertEquals(8, count($resultBetween3and10));
    }

}
