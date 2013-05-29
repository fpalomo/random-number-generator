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

    public function testGenerate()
    {
        $generateRandomNumbers = new RandomNumberGenerator();
        $resultBetween1and1 = $generateRandomNumbers->between(1, 1);

        $this->assertTrue(is_array($resultBetween1and1));
        $this->assertContains(1, $resultBetween1and1);
        $this->assertEquals(1,count($resultBetween1and1));


    }


}
