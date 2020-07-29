<?php

function palindrome_angka($angka) {
    $a = $angka;
    
    if($angka >= 0 && $angka<10){
        echo $angka+1 . "<br>";
    }else{
        while(true){
            $strOri = strval($a);
            $str = strval($a);
            // echo $a . "<br>";
            for($i = strlen($str)-1, $j = 0; $j < $i ; $i-- , $j++ ){
                $temp = $str[$i];
                $str[$i] = $str[$j];
                $str[$j] = $temp;
            }
            // echo $str;
            // echo $str . "<br>";
            $buff = strcmp($strOri,$str);
            // echo $buff . "<br>";

            if($buff == 0){
                echo $strOri . "<br>";
                break;
            }else{
                $a++;
            }
        }

    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>