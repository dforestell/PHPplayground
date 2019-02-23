<?php
class Dress{
  public $color = "Red";
  public $fabric = "Linen";
  public $design = "Slim Fit Blazer";
}

$DressObj = new Dress();
var_dump ($DressObj);

$DressObj->color = "Black";
var_dump ($DressObj);
?>
