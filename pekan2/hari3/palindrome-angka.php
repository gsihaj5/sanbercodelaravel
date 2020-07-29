<?php
    function palindrome($str){
        if(strrev($str) == $str){
            return true;
        }
        return false;

    }

function palindrome_angka($angka) {
    echo"$angka -> ";
    if($angka > 0 && $angka <= 8){
        return ++$angka . "<br>";
    }

    while(!palindrome($angka)){
        $angka++;
    }
    return $angka ."<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
