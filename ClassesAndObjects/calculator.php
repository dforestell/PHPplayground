<?php
class Calculator{
  Public function add($number1, $number2){
     $sum = $number1 + $number2;
     echo "$sum \n";
  }
  Public function subtract($number1, $number2){
     $difference = $number1 - $number2;
     echo "$difference \n";
  }
  Public function multiply($number1, $number2){
     $product = $number1 * $number2;
     echo "$product \n";
  }
  Public function divide($number1, $number2){
     $quotient = $number1 + $number2;
     echo "$quotient \n";
  }
}

$CalcObj = new Calculator();
$CalcObj->add(4,7);
$CalcObj->subtract(5,4);
$CalcObj->multiply(3,4);
$CalcObj->divide(6,2);
?>
