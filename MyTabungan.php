class Keuangan:
    def __init__(self, saldo_awal):
        self.saldo = saldo_awal

    # Method tanpa parameter dan non-return type
    def tambah_pendapatan(self):
        jumlah = float(input("Masukkan jumlah pendapatan: "))
        self.saldo += jumlah
        print("Pendapatan berhasil ditambahkan.")
    
    # Method dengan parameter dan non-return type
    def tambah_pengeluaran(self, jumlah):
        self.saldo -= jumlah
        print("Pengeluaran berhasil ditambahkan.")
    
    # Method tanpa parameter dengan return type
    def cek_saldo(self):
        return self.saldo

    # Method dengan parameter dan return type
    def hitung_total(self, pendapatan, pengeluaran):
        return pendapatan - pengeluaran

# Fungsi tanpa parameter dan non-return type
def tampilkan_menu():
    print("=== Selamat Datang Di MyTabungan ===")
    print("1. Tambah Pendapatan")
    print("2. Tambah Pengeluaran")
    print("3. Cek Saldo")
    print("4. Keluar")

# Fungsi dengan parameter dan return type
def main():
    saldo_awal = float(input("Masukkan saldo awal: "))
    manajer_keuangan = Keuangan(saldo_awal)

    while True:
        tampilkan_menu()
        pilihan = input("Pilih menu: ")

        if pilihan == '1':
            manajer_keuangan.tambah_pendapatan()
        elif pilihan == '2':
            jumlah = float(input("Masukkan jumlah pengeluaran: "))
            manajer_keuangan.tambah_pengeluaran(jumlah)
        elif pilihan == '3':
            print("Saldo Anda saat ini:", manajer_keuangan.cek_saldo())
        elif pilihan == '4':
            print("Terima kasih telah menggunakan sistem manajemen keuangan.")
            break
        else:
            print("Pilihan tidak valid. Silakan pilih menu yang tersedia.")

if __name__ == "__main__":
    main()
