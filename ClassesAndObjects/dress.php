<?php
class Dress{
  public $color = "Red";
  public $fabric = "Linen";
  public $design = "Slim Fit Blazer";

  Public function displayInfo(){
    echo "This dress' color, fabric and design are: \n";
    echo $this->color."\n";
    echo $this->fabric."\n";
    echo $this->design."\n";
  }
}

$DressObj = new Dress();
$DressObj->displayInfo();

$DressObj->color = "Black";
$DressObj->displayInfo();
?>
