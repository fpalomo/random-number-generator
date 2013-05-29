<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fernando
 * Date: 29/05/13
 * Time: 15:54
 * To change this template use File | Settings | File Templates.
 */

class RandomNumberGenerator
{

    protected $disorder = false;

    public function between($lower, $higher)
    {
        if($higher<$lower){
            return array();
        }
        $randomValues = range($lower, $higher);
        shuffle($randomValues);

        return $randomValues;

    }


    public function disordered()
    {
        $this->disorder = true;

        return $this;
    }

}