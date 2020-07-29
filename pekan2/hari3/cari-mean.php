<?php

function cari_mean($arr){
//kode di sini
    $sum = 0;
    $length = count($arr);
    
    for($i = 0; $i < $length; $i ++ ){
        $sum += $arr[$i];
    }

    $mean = $sum/$length;
    $mean = round($mean);
    
    print_r($arr);
    echo "dengan mean -> $mean";
    echo "<br>";

}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>
