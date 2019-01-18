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


?>