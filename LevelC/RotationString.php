<?php

namespace Hackathon\LevelC;

class RotationString
{
    /**
     * @TODO ! BAM
     *
     * @param $s1
     * @param $s2
     *
     * @return bool|int
     */
    public static function isRotation($s1, $s2)
    {
        if (strlen($s1) != strlen($s2)){
            return false;
        }

        $findme = substr($s1, 0, 1);
        $pos = strpos($s2, $findme);

        if ($pos == false){
            return false;
        }
        
        $len = strlen($s1) - $pos ;

        $str1 = substr($s1, 0, 1);

        // TO CONTINUE

        return true;


    }

    public static function isSubString($s1, $s2)
    {
        $pos = strpos($s1, $s2);

        return $pos;
    }
}
