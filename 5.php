<?php
$hasil = 0;
function ganjil($bil_awal,$bil_akhir){
	global $hasil;
	while ($bil_awal <= $bil_akhir) {
        if ($bil_awal % 2 >= 1) {
            echo $bil_awal."<br/>";

            $hasil = $hasil + $bil_awal;
        }
        $bil_awal++;
    }
    echo "=====+<br/>".$hasil;
}
ganjil(1,10);    
    ?>
