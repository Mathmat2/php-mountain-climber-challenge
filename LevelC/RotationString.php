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
        $findme = substr($s1, 0, 1);
        
        for ($i = 0; $i < strlen($s2); $i++) {

            if ( $findme == substr($s2, $i, 1)){
                $pos = strpos($s2, $findme);
                break;
            }
        }
        

        return false;
    }

    public static function isSubString($s1, $s2)
    {
        $pos = strpos($s1, $s2);

        return $pos;
    }
}
