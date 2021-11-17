<?php

namespace Hackathon\LevelK;

class Brute
{
    private $hash;
    public $origin;
    private $method; // md5 - crc32 - base64 - sha1

    public function __construct($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @TODO :
     *
     * Cette méthode essaye de trouver par la force à quel mot de 4 lettres correspond ce hash.
     * Sachant que nous ne connaissons pas le hash (enfin si... il suffit de regarder les commentaires de l'attribut privé $methode.
     */
    public function force()
    {
        
        // @TODO
        $set = 'abcdefghijklmnopqrstuvwxyz';

        $string = 'aaaa';
        print($this->hash);
        print("\n");

        for ($i=0; $i < 26; $i++) { 
            for ($j=0; $j < 26; $j++) {
                for ($k=0; $k < 26; $k++) { 
                    for ($l=0; $l < 26; $l++) { 
                        $string[0] = $set[$i];
                        $string[1] = $set[$j];
                        $string[2] = $set[$k];
                        $string[3] = $set[$l];
                        if ($this->hash == md5($string)) {
                            $this->origin = $string;
                            return;
                        }
                    }
                }
            }
        }

        $this->origin = $string;
    }
}
