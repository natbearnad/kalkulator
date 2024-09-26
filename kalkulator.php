<?php
// Fungsi untuk menampilkan menu
function tampilkanMenu() {
    echo "Kalkulator Sederhana\n";
 
    echo "1. Penjumlahan\n";
    echo "2. Pengurangan\n";
    echo "3. Perkalian\n";
    echo "4. Pembagian\n";
    echo "5. Keluar\n";
}

// Fungsi untuk melakukan operasi
function kalkulasi($angka1, $angka2, $operasi) {
    switch ($operasi) {
        case 1:
            return $angka1 + $angka2;
        case 2:
            return $angka1 - $angka2;
        case 3:
            return $angka1 * $angka2;
        case 4:
            return $angka1 / $angka2;
        default:
            return null;
    }
}

// Loop utama
do {
    tampilkanMenu();
    
    // Mengambil input dari pengguna
    $operasi = (int)readline("Masukkan pilihan operasi (1-5): ");
    
    if ($operasi == 5) {
        echo "Terima kasih! Selamat tinggal.\n";
        break;
    }

    $angka1 = (float)readline("Masukkan angka pertama: ");
    $angka2 = (float)readline("Masukkan angka kedua: ");

    // Melakukan kalkulasi
    $hasil = kalkulasi($angka1, $angka2, $operasi);
    
    if ($hasil !== null) {
        echo "Hasil: $hasil\n";
    } else {
        echo "Operasi tidak valid.\n";
    }

    echo "\n";
} while (true);
?>
