<?php
$json_data=file_get_contents("profil.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->NIM;
echo "<br>";
echo "NAMA : "; echo $obj->Nama;
echo "<br>";
echo "ALAMAT : ";echo $obj->Alamat;
echo "<br>";
echo "HP : ";echo $obj->No_hp;
echo "<br>";
echo "Mata Kuliah 1 : ";echo $obj->Matkul[0];
echo "<br>";
echo "Mata Kuliah 2 : ";echo $obj->Matkul[1];
echo "<br>";
echo "Mata Kuliah 3 : ";echo $obj->Matkul[2];
?>