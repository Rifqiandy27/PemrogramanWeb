<?php

$mahasiswa = [
  [
    "foto" => "garnacho.jpeg",
    "nama" => "Alejandro Garnacho",
    "alamat" => "Jl. Merdeka No. 1",
    "no_telepon" => "08123456789",
    "jurusan" => "Teknik Informatika",
  ],
  [
    "foto" => "gavi.jpeg",
    "nama" => "Pablo Gavi",
    "alamat" => "Jl. Sudirman No. 2",
    "no_telepon" => "08987654321",
    "jurusan" => "Teknik Elektro",
  ],
];

$i = 1;
foreach ($mahasiswa as $mhs) {
  echo "Moch. Rifqi Andy Setyawan" . "<br>";
  echo "<br>";
  echo "" . $i . ". ";
  echo "<img src='" . $mhs["foto"] . "' width='100px' height='100px'>";
  echo "<br>";
  echo "Nama: " . $mhs["nama"] . "<br>";
  echo "Alamat: " . $mhs["alamat"] . "<br>";
  echo "No. Telepon: " . $mhs["no_telepon"] . "<br>";
  echo "Jurusan: " . $mhs["jurusan"] . "<br>";
  echo "<hr>";
  $i++;
}

?>