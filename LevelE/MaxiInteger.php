<?php

namespace Hackathon\LevelE;

class MaxiInteger
{
    private $value;
    private $reverse;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * @FIX : CAN BE UPDATED
     *
     * @param MaxiInteger $other
     * @return $this|MaxiInteger
     */
    public function add(MaxiInteger $other)
    {
        if (is_null($other)) {
            return $this;
        }

        return $this->realSum($this, $other);
    }

    /**
     * @TODO
     *
     * @param MaxiInteger $a
     * @param MaxiInteger $b
     * @return MaxiInteger
     */
    private function realSum($a, $b)
    {
        $reverse_a = strrev($a->getValue());
        $reverse_b = strrev($b->getValue());

        $retenue = 0;

        $result = "";
        $i = 0;

        while ($i < strlen($reverse_a) && $i < strlen($reverse_b)) {
            $val_a = intval($reverse_a[$i]);
            $val_b = intval($reverse_b[$i]);

            $add = $val_a + $val_b + $retenue;
            $retenue = intdiv($add, 10);
            $result .= strval($add % 10);

            ++$i;
        }

        if (strlen($reverse_b) > strlen($reverse_a)) {
            for ($j = $i; $j < strlen($reverse_b); ++$j) {
                $val_b = intval($reverse_b[$j]);
                if ($retenue != 0) {
                    $add = $val_b + $retenue;
                    $retenue = intdiv($add, 10);
                    $val_b = $add % 10;
                }

                $result .= $val_b;
            }
        }

        if (strlen($reverse_b) < strlen($reverse_a)) {
            for ($j = $i; $j < strlen($reverse_a); ++$j) {
                $val_a = intval($reverse_a[$j]);
                if ($retenue != 0) {
                    $add = $val_a + $retenue;
                    $retenue = intdiv($add, 10);
                    $val_a = $add % 10;
                }

                $result .= $val_a;
            }
        }

        if ($retenue != 0) {
            $result .= $retenue;
        }

        return new MaxiInteger(strrev($result));
    }

    private function setValue($value)
    {
        $this->value = $value;
        $this->reverse = $this->createReverseValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }

    private function getNthOfMaxiInteger($n)
    {
        return $this->value[$n];
    }
    private function createReverseValue($value)
    {
        return strrev($value);
    }

    private function fillWithZero($totalLength)
    {
        return new self(strrev(str_pad($this->reverse, $totalLength, '0')));
    }
}
