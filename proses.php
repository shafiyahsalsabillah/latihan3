<?php
// Ambil nilai dari textbox angka1 dan angka2
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];

// Ambil nilai dari dropdown operator
$operator = $_POST["operator"];

// Lakukan operasi matematika sesuai dengan nilai operator
if ($operator == "+") {
	$hasil = $angka1 + $angka2;
} else if ($operator == "-") {
	$hasil = $angka1 - $angka2;
} else if ($operator == "*") {
	$hasil = $angka1 * $angka2;
} else if ($operator == "/") {
	$hasil = $angka1 / $angka2;
} else {
	$hasil = "Error: Operator tidak valid";
}

// Tampilkan hasil operasi aritmatika
echo "Hasil: " . $hasil;
?>
