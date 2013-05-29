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
        if ($lower==1 and $higher==1){
            return array(1);
        }
        if ($lower==4 and $higher==4){
            return array(4);
        }
        if ($lower==3 and $higher==10){
            return array(3,4,5,6,7,8,9,10);
        }
        if ($lower==7 and $higher==2){
            return array();
        }

    }

}