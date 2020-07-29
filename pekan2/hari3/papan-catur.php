<?php
function makeSpacedLine($angka){
    for($i = 0; $i < $angka - 1; $i++)
        echo"# ";
}



function papan_catur($angka) {
// tulis kode di sini
    echo "papan catur ukuran $angka <br>";
    for($i = 0; $i < $angka; $i++){
        if($i % 2 === 0)
            echo"&nbsp&nbsp";

        makeSpacedLine($angka);
        if($i % 2 === 1) 
            echo "#";

        echo"<br>";
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

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
