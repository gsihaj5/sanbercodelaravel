<?php
/* ALGORITHM
 * -> cek simbol operasi menggunakan strpos()
 * -> pisah kan bilangan yang ada di kiri simbol dan di kanan simbol menggunakan explode()
 * -> kembalikan hasil perhitungan
 */ 
function hitung($string_data){
    if(strpos($string_data,'*')){
        $data = explode("*", $string_data);
        return($data[0] * $data[1]);
    } else if(strpos($string_data,':')){
        $data = explode(":", $string_data);
        return($data[0] / $data[1]);
    }
    else if(strpos($string_data,'+')){
        $data = explode("+", $string_data);
        return($data[0] + $data[1]);
    }
    else if(strpos($string_data,'-')){
        $data = explode("-", $string_data);
        return($data[0] - $data[1]);
    }
    else if(strpos($string_data,'%')){
        $data = explode("%", $string_data);
        return($data[0] % $data[1]);
    }
}

//testcase
echo hitung("102*2");
echo "<br>";
echo hitung("2+3");
echo "<br>";
echo hitung("100:25");
echo "<br>";
echo hitung("10%2");
echo "<br>";
echo hitung("99-2");
echo "<br>";
    




?>
