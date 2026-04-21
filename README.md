1. Buat/Edit File
Buka file bernama README.md di VS Code kamu (ada di folder paling luar).

2. Copas Kode Ini
Hapus semua isinya, lalu masukkan ini:

Markdown
# ☕ db_toko_kopi - Laravel 12

Aplikasi CRUD sederhana untuk manajemen daftar menu kopi, dibuat dengan **Laravel 12**.

## 🚀 Fitur
* Menampilkan daftar menu kopi (Index).
* Menambah menu kopi baru (Create).
* Mengubah data kopi (Edit).
* Menghapus menu (Delete).
* Tampilan tabel minimalis & rapi.

## 🛠️ Cara Install
1. **Clone repository ini:**
   ```bash
   git clone [https://github.com/Raihananas/Tugas_Web2.git](https://github.com/Raihananas/Tugas_Web2.git)
Masuk ke folder:

Bash
cd db_toko_kopi
Install dependensi:

Bash
composer install
Copy .env & Generate Key:

Bash
cp .env.example .env
php artisan key:generate
Migrasi Database:

Bash
php artisan migrate
Jalankan Server:

Bash
php artisan serve
Dibuat oleh Raihan


### 3. Update ke GitHub
Setelah kamu save filenya, jalankan **3 langkah sakti** lagi di terminal:

```powershell
git add README.md
git commit -m "update readme proyek"
git push
