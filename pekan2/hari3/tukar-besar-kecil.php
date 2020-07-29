<?php
function tukar_besar_kecil($string){
//kode di sini
    for($i = 0; $i < strlen($string); $i ++){
        $ascii = ord($string[$i]);

        if($ascii <= ord("Z") && $ascii >= ord("A"))
            $ascii += 32;
        else if($ascii <= ord("z") && $ascii >= ord("a"))
            $ascii -= 32;

        echo chr($ascii);
    }
    echo"<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
