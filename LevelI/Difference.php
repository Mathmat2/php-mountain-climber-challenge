<?php

namespace Hackathon\LevelI;

/**
 * Class Difference
 */
class Difference
{
    private $a;     // Chaine A
    private $b;     // Chaine A  -> Mae : Chaine B plutot non ?
    public $cost;   // Coût de changement

    /**
     * @param $a    // Chaine A
     * @param $b    // Chaine B
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->cost = $this->whatIsTheCostPlease($a, $b);
    }

    /**
     * @param $this->a
     * @param $this->b
     *
     * @return mixed
     */
    public function whatIsTheCostPlease()
    {
        // @ TODO
        $lenA = strlen($this->a);
        $lenB = strlen($this->b);

        $diff = 0;
        $j = 0;

        for ($i = 0; $i < $lenA; ++$i) {
            if ($this->a[$i] !== $this->b[$j]){
                $diff = $diff++;
                $j = $j + 1;
            }
            if ($this->a[$i] === $this->b[$j]){
                $j = $j + 1;
            }
            if ($j >= $lenB){
                break;
            }
        }

        return $diff;

        // for ($i = 1; $i <= $lenA; ++$i) {
        //     for ($j = 1; $j <= $lenB; ++$j) {
        //         $c = ($this->a[$i - 1] === $this->b[$j - 1]) ? 0 : 1;
        //         $matrix[$i][$j] = 0;
        //     }
        // }

        // return $matrix[$lenA][$lenB];
    }
}
