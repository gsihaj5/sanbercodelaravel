<?php
function pasangan_terbesar($angka){
// kode di sini
$string_num = strval($angka);

echo $angka."<br>";
$max = 0;

for($i = 0; $i < strlen($string_num); $i++ ){
    if($i + 1 < strlen($string_num))
        $two_num = substr($string_num, $i, 2);

    if($max < $two_num) $max = $two_num;
}
return "-> ".$max."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>
