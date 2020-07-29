<?php

function papan_catur($angka) {
// tulis kode di sini
    $total = $angka*2;
    for($i = 1 ; $i<=$angka ; $i++){
        $hasil = $i%2;
        // echo $hasil;
        if($hasil == 1){
            for($j = 0 ; $j < $total;$j++){
                if($j%2 == 1){
                    echo "#";
                }else{
                    echo " ";
                }
            }
        }else if($hasil == 0){
            for($j = 1 ; $j < $total ; $j++){
                if($j%2 == 0){
                    echo "#";
                }else{
                    echo "&nbsp";
                }
            }    
        }
        echo "<br>";
    }
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/