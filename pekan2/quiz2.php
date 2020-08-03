<?php
/*ALGORITHM
 * cek jika jumlah isi dari array 0 langsuung return no data
 * jika isi dari array > 0 
 *      ambil nama negara
 *      jika medali emas maka jumlah emas di tambah + 1
 *      jika medali perak maka jumlah perak di tambah + 1
 *      jika medali perunggu maka jumlah perunggu di tambah + 1
 */

function perolehan_medali($array){
    $result=[
        array(
            'negara' => 'Indonesia',
            'emas' => 0,
            'perak' => 0,
            'perunggu' => 0
        ),
        array(
            'negara' => 'India',
            'emas' => 0,
            'perak' => 0,
            'perunggu' => 0
        ),
        array(
            'negara' => 'Korea Selatan',
            'emas' => 0,
            'perak' => 0,
            'perunggu' => 0
        )
    ];


    if(count($array) == 0) return "no data";

    for($i = 0; $i < count($array); $i++){
        $negara = $array[$i][0];
        $medali = $array[$i][1];
        if($negara == "Indonesia"){
            if($medali == "emas") $result[0]['emas'] ++;
            else if($medali == "perak") $result[0]['perak'] ++;
            else if($medali == "perunggu") $result[0]['perunggu'] ++;
        }else if($negara == "India"){
            if($medali == "emas") $result[1]['emas'] ++;
            else if($medali == "perak") $result[1]['perak'] ++;
            else if($medali == "perunggu") $result[1]['perunggu'] ++;
        }else if($negara == "Korea Selatan"){
            if($medali == "emas") $result[2]['emas'] ++;
            else if($medali == "perak") $result[2]['perak'] ++;
            else if($medali == "perunggu") $result[2]['perunggu'] ++;
        }

    }
    return $result;
}



//testcase

print_r(perolehan_medali(
    array(
        array('Indonesia', 'emas'),
        array('India', 'perak'),
        array('Korea Selatan', 'emas'),
        array('India', 'perak'),
        array('India', 'emas'),
        array('Indonesia', 'perak'),
        array('Indonesia', 'emas')
    )
));
?>
