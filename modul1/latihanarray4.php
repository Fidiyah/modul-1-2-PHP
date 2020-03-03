<?php
$arrnilai = array("ani" => 80, "otim" => 90, "ana"=> 75, "budi" => 85);
echo "Menampilkan isi array dengan foreach : <br>"; //pointer adalah tipe data
 //bahasa pemrograman yang nilainya mengacu untuk menunjuk 
 //langsung nilai lain yang tersimpan di tempat lain dalam suatu memori 
//komputer menggunakan alamat yang ada
//for untuk perulangan
foreach($arrnilai as $nama => $nilai){
    echo "Nilai $nama =$nilai<br>";
}
reset($arrnilai);
echo"<br>menampilkan isi array dengan while dan list : <br>";
while(list ($nama,$nilai) = each($arrnilai)){
    echo "nilai $nama = $nilai <br>";
    //while untuk percabangan
}
?>