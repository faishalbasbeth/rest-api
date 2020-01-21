<?php

// $mahasiswa = [
// 	[
// 		"nama" => "Sandhika Galih",
// 		"nrp" => "043040023",
// 		"email" => "sandhikagalih@unpas.ac.id"
// 	],
// 	[
// 		"nama" => "Erik Doank",
// 		"nrp" => "023040001",
// 		"email" => "erik@gmail.com"
// 	]
// ];

// var_dump($mahasiswa);

$dbh = new PDO('mysql:host=localhost;dbname=malasngoding_laravel', 'root', '');
$db = $dbh->prepare('SELECT * FROM siswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>