<?php
class Calc {
  private $op1;
  private $op2;

  public function __construct($op1, $op2){
    $this->op1 = $op1;
    $this->op2 = $op2;
  }
  
  public function add() {
    return $this->op1 + $this->op2;
  }
}

$c = new Calc(3,5);

echo $c->add()."\n";

?>