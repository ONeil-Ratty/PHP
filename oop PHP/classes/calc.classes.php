<?php
?>
<!-- Calculator Class -->
<?php
class calc{

public $operation;
public $num1;
public $num2;

public function __construct($num1,$operation,$num2){

    $this->num1=$num1;
    $this->num2=$num2;
    $this->operation=$operation;
}

public function calculator(){
    if($this->operation == "add"){
        $value = $this->num1 + $this->num2;
        return $value;
    }
    elseif($this->operation == "sub"){
        $value = $this->num1 - $this->num2;
        return $value;
    }
    elseif($this->operation == "multi"){
        $value = $this->num1 * $this->num2;
        return $value;
    }
    elseif($this->operation == "div"){
        $value = $this->num1 / $this->num2;
        return $value;
    }
}
}
?>
