<?php
include_once 'database.php';

//insert
// if($_POST["type"] == 'insert'){
// $komentar = mysqli_real_escape_string($link, $_POST['isi_komentar']);
// $query = "Insert INTO Komentar (komentar, user_id) VALUES ('$komentar',1)";
//
// if (mysqli_query($link, $query)){
//     $last_id = mysqli_insert_id($link);
//     echo "<p id='komentar_".$last_id."'>".$komentar."
//     <button type='button' class='hapus_komentar btn btn-danger' data-id='".$last_id."'> hapus </button>
//     </p>";
//
//     ;
//

$nama = $_POST['nama'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$nominal = $_POST['nominal'];

echo "Nama: ".$nama;
echo "Alamat: ". $alamat;
echo "usia: ". $usia;
echo "Nominal: ". $nominal;
?>
