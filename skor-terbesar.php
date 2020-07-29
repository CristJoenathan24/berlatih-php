<?php
function skor_terbesar($arr){
//kode di sini
    $nilaiTerbesar = [
        "Laravel" => [
            "nama" => "test",
            "kelas" => "Laravel",
            "nilai" => 0
        ],
        "React Native" => [
            "nama" => "test",
            "kelas" => "React Native",
            "nilai" => 0
        ],
        "React JS" => [
            "nama" => "test",
            "kelas" => "React JS",
            "nilai" => 0
        ],
    ];

    $len = count($arr);
    for($i = 0 ;$i < $len; $i++){
        if($arr[$i]["kelas"] == "Laravel"){
            if($arr[$i]["nilai"] > $nilaiTerbesar["Laravel"]["nilai"]){
                $nilaiTerbesar["Laravel"]["nama"] = $arr[$i]["nama"];
                $nilaiTerbesar["Laravel"]["nilai"] = $arr[$i]["nilai"];
            }
        }else if($arr[$i]["kelas"] == "React Native"){
            if($arr[$i]["nilai"] > $nilaiTerbesar["React Native"]["nilai"]){
                $nilaiTerbesar["React Native"]["nama"] = $arr[$i]["nama"];
                $nilaiTerbesar["React Native"]["nilai"] = $arr[$i]["nilai"];
            }
        }else if($arr[$i]["kelas"] == "React JS"){
            if($arr[$i]["nilai"] > $nilaiTerbesar["React JS"]["nilai"]){
                $nilaiTerbesar["React JS"]["nama"] = $arr[$i]["nama"];
                $nilaiTerbesar["React JS"]["nilai"] = $arr[$i]["nilai"];
            }
        }
    }
    return $nilaiTerbesar;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>