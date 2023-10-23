<?php
// Masukkan berat (dalam kilogram) dan tinggi (dalam meter)
$berat = 54; // Contoh berat
$tinggi = 1.70; // Contoh tinggi

// Hitung BMI
$bmi = $berat / ($tinggi * $tinggi);

// Tampilkan hasil BMI
echo "Hallo, saya Fawwaz Aziz. Nilai BMI saya adalah " . number_format($bmi, 2);

// Menampilkan interpretasi BMI
if ($bmi < 18.5) {
    echo " (Kurus)";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    echo " (Sedang)";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    echo " (Gemuk)";
} else {
    echo " (Obesitas)";
}
?>
