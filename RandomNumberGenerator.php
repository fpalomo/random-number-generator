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


    public function between($lower, $higher)
    {
        $randomValues = array();

        for($i=$lower;$i<=$higher;++$i){
            $randomValues[]=$i;
        }

        return $randomValues;

    }

}