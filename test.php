<?php
function fact($n){
    if($fact<=1){
        return 1;
    }else{
        $result = $n*fact($n-1);
        return $result;
    }
}

echo "Factorial of 10 is = ".fact(10);
echo '<br>';

function square($n){
    if($n<0){
        return "Invalid Input";
    }else{
        $result = sqrt($n);
    }
}
echo "Square root of 4 is = ".square(4);

?>