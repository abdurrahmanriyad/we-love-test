<?php


namespace App\Calculator;


class Addition
{
    public function calculate(array $operands) : float
    {
        if (count($operands) < 2) {
            throw new \Exception('Minimum tow operands required');
        }

        $total = 0;
        foreach ($operands as $operand) {
            $total += $operand;
        }

        return  $total;
    }
}
