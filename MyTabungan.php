<?php

function catat_transaksi() {
    $transaksi = [];

    function tampilkan_riwayat() {
        global $transaksi;
        echo "\nRiwayat Transaksi:\n";
        $total_pengeluaran = 0;
        $total_pendapatan = 0;
        foreach ($transaksi as $data) {
            list($jenis, $keterangan, $nominal) = $data;
            echo "$jenis: $keterangan - $nominal\n";
            if ($jenis == "Pengeluaran") {
                $total_pengeluaran += $nominal;
            } else {
                $total_pendapatan += $nominal;
            }
        }
        echo "\nTotal Pengeluaran: $total_pengeluaran\n";
        echo "Total Pendapatan: $total_pendapatan\n";
    }

    function catat_pengeluaran($keterangan, $nominal) {
        global $transaksi;
        $transaksi[] = array("Pengeluaran", $keterangan, $nominal);
        echo "Pengeluaran berhasil dicatat.\n";
    }

    function catat_pendapatan($keterangan, $nominal) {
        global $transaksi;
        $transaksi[] = array("Pendapatan", $keterangan, $nominal);
        echo "Pendapatan berhasil dicatat.\n";
    }

    while (true) {
        echo "\nMenu:\n";
        echo "1. Catat Pengeluaran\n";
        echo "2. Catat Pendapatan\n";
        echo "3. Tampilkan Riwayat Transaksi\n";
        echo "4. Keluar\n";
        $pilihan = readline("Pilih menu (1/2/3/4): ");

        if ($pilihan == '1') {
            $keterangan = readline("Masukkan keterangan pengeluaran: ");
            $nominal = readline("Masukkan jumlah pengeluaran: ");
            catat_pengeluaran($keterangan, $nominal);
        } elseif ($pilihan == '2') {
            $keterangan = readline("Masukkan keterangan pendapatan: ");
            $nominal = readline("Masukkan jumlah pendapatan: ");
            catat_pendapatan($keterangan, $nominal);
        } elseif ($pilihan == '3') {
            tampilkan_riwayat();
        } elseif ($pilihan == '4') {
            echo "Terima kasih telah menggunakan program ini.\n";
            break;
        } else {
            echo "Pilihan tidak valid. Silakan pilih menu yang benar.\n";
        }
    }
}

catat_transaksi();

?>

