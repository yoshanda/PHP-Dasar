<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Komentar
// ini adalah komentar untuk per baris
/*
ini 
adalah 
komentar
untuk
beberapa
baris
sekaligus
*/



// Standar Output
// echo
// print
// print_r() -> untuk array
// var_dump() -> untuk melihat isi dari variabel dan akan tampil isi dari variabel tersebut

echo "Hello World!";
echo " ";
print "Hello World!";
print " ";
print_r("Hello World!");
print_r(" ");
var_dump("Hello World!");
var_dump(" ");



// Penulisan Sintaks PHP
// 1. PHP di dalam HTML (disarankan)
// 2. HTML di dalam PHP (tidak disarankan)

/*
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Selamat Datang <?php echo "Yosha"; ?></h1> //penulisan PHP di dalam HTML

	<?php
		echo "<p>penulisan HTML didalam PHP</p>" //penulisan HTML di dalam PHP
	?>
</body>
</html>
*/



// Variabel dan Tipe Data
// variabel -> tidak boleh di awali dengan angka, namun boleh mengandung angka, tidak boleh ada spasi/space

$nama = "Muhammad Iqbal Yoshanda";
$nama2 = "Yoshanda";
echo "Perkenalkan nama saya $nama";
echo " ";
echo "Saya biasa dipanggil dengan $nama2";



// Operator
// aritmatika (+, -, *, /, %)

$x = 1;
$y = 2;
echo $x + $y;
echo $x - $y;



// Penggabung String / Concatenation / Concat
// . 

$nama1 = "Iqbal";
$nama2 = "Yoshanda";
echo "Perkenalkan nama saya" . " " . $nama1 . " " . $nama2;



// Assignment
// =, +=, -=, *=, /=, %=, .=

$x = 1;
$y = 5;
echo $x + $y;

$x = 1;
echo $x += 5;

$nama = "Muhammad";
$nama .= " ";
$nama .= "Iqbal";
$nama .= " ";
$nama .= "Yoshanda";
echo $nama;



// Perbandingan (hanya membandingkan nilainya saja, bukan tipe data dari nilai tersebut)
// <, >, <=, >=, ==, !=

var_dump(1 == 5); //false
var_dump(1 == "1"); //true karena nilai sama-sama 1



// Identitas (membandingkan dengan tipe data dari nilai, bukan hanya nilainya saja)
// ===, !==

var_dump(1 === "1"); //false



// Logika
// &&, ||, !

$x = 10;
var_dump($x < 20 && $x % 2 == 0); //true
var_dump($x < 8 && $x % 2 == 0); //false
var_dump($x < 8 || $x % 2 == 0); //true
?>