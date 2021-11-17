<?php

namespace Hackathon\LevelD;

class Bobby
{
    public $wallet = array();
    public $total;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
        $this->computeTotal();
    }

    /**
     * @TODO
     *
     * @param $price
     *
     * @return bool|int|string
     */
    public function giveMoney($price)
    {
        if ($price > $this->total) {
            return false;
        }
        
        $len = count($this->wallet);
        while ($price > 0) {
            // Get max
            $max = 0;
            $pos = -1;
            for ($i=0; $i < count($this->wallet); $i++) {
               if (is_numeric($this->wallet[$i])) {
                   if ($this->wallet[$i] <= $price && $this->wallet[$i] > $max) {
                       $pos = $i;
                       $max = $this->wallet[$i];
                   }
               }
            }
            if ($pos == -1) {
                return true;
            }
            $price = $price - $this->wallet[$pos];
            $this->total = $this->total - $this->wallet[$pos];
            //print_r($this->wallet);
            //print_r($pos);
            unset($this->wallet[$pos]);
            $len = $len - 1;
        }

        return true;
    }

    /**
     * This function updates the amount of your wallet
     */
    private function computeTotal()
    {
        $this->total = 0;

        foreach ($this->wallet as $element) {
            if (is_numeric($element)) {
                $this->total += $element;
            }
        }
    }
}
