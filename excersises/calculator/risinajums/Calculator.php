<?php

// Pirmā klase: Matemātiskās operācijas
class Calculator
{
    // Saskaita divus skaitļus
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    // Atņem vienu skaitli no otra
    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    // Reizina divus skaitļus
    public function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }

    // Dalījums ar pārbaudi, vai otrais skaitlis nav nulle
    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            throw new Exception("Dalīšana ar nulli nav atļauta!");
        }
        return $num1 / $num2;
    }
}