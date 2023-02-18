<?php
class Fibonacci {
    public function fibonacci(){ 
      
        $num1 = 0; 
        $num2 = 1; 
      
        $counter = 0; 
        while ($counter < 40){ 
            echo ' '.$num1;
            $num3 = $num2 + $num1; 
            $num1 = $num2; 
            $num2 = $num3; 
            $counter = $counter + 1; 
        } 
    } 
}
$suite = new Fibonacci;
$suite->fibonacci();

?>