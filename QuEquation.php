<?php

namespace Burkauskas;
use core\EquationInterface;

Class B extends A implements EquationInterface
{
    protected function dis($a, $b, $c)
    {
        $d = ($b * $b - (4 * $a * $c));
        return $d;
    }

    public function solve($a, $b, $c)
    {

        if ($a == 0) {
            return $this->lin($b, $c);
        }
        $x = $this->dis($a, $b, $c);

        if ($x > 0) {
            return $this->x = array(-($b + sqrt($b ** 2 - 4 * $a * $c) / 2 * $a), -($b - sqrt($b ** 2 - 4 * $a * $c) / 2 * $a));
        }
        if ($x == 0) {
            return $this->x = array(-($b / 2 * $a));
        }
        throw new BurkauskasException("Ошибка: уравнение не имеет корней.");
    }
}

?>