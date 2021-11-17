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
        
        $len = strlen($s1);

        for ($i = 0; $i < $len; ++$i) {
            if ($pos >= $len) {
                $pos = 0;
            }

            if ($s1[$i] != $s2[$pos]) {
                return false;
            }

            $pos++;
        }

        

        return true;


    }

    public static function isSubString($s1, $s2)
    {
        $pos = strpos($s1, $s2);

        return $pos;
    }
}
