<?php
function skor_terbesar($arr){
//kode di sini
    $kelas = [];
    print_r($arr);
    echo "<br>";
    echo "<br>";

    for($i = 0; $i < count($arr); $i ++){

        if(!array_key_exists($arr[$i]['kelas'], $kelas)){
            $init = [$arr[$i]['kelas'] => $arr[$i]];
            //print_r($init);
            //echo"<br>";
            $kelas = array_merge($kelas, $init);
        }

        //echo" current array -> ";
        //print_r($kelas);
        //echo "<br>";

        $namaKelas = $arr[$i]['kelas'];
        if($kelas["Laravel"]['nilai'] < $arr[$i]["nilai"]){
            $kelas[$namaKelas] = $arr[$i];
        }
    }

    print_r($kelas);

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
