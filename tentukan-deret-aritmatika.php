<?php
function tentukan_deret_aritmatika($arr) {
    $interval = 0;
    $flag = true;
    for($i = 0 ; $i < count($arr)-1; $i++){
        if($i == 0){
            $interval = $arr[$i+1] - $arr[$i];
        }else{
            $check = $arr[$i+1] - $arr[$i];
            if($interval != $check){
                $flag = false;
                break;
            }
        }
    }

    if($flag == true){
        echo "true<br>";
    }else{
        echo "false<br>";
    }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>