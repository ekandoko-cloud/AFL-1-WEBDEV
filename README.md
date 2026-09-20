# Mahasiswa & Mata Kuliah — Latihan MVC PHP

Aplikasi sederhana yang menerapkan konsep **MVC (Model - View - Controller)**
menggunakan PHP murni, tanpa database (data disimpan sementara di **session**).

## Studi Kasus

- **Entity A: Mahasiswa** → nama, NIM, jurusan
- **Entity B: Mata Kuliah** → nama, kode, SKS
- **Relasi**: "Mahasiswa ambil Mata Kuliah apa" (many-to-many sederhana)

Fitur yang tersedia untuk ketiganya: **Simpan (Create)**, **Tampilkan (Read)**,
dan **Hapus (Delete)**.

## Struktur File

```
mvc_mahasiswa/
├── index.php       -> entry point, redirect ke view.php
├── model.php       -> class Mahasiswa & MataKuliah (struktur data)
├── controller.php  -> logic simpan & hapus data (diproses lalu redirect ke view.php)
└── view.php        -> tampilan HTML (Bootstrap) + 3 tab: Mahasiswa, Mata Kuliah, Relasi
```

## Bagaimana Konsep MVC Diterapkan

1. **Model** (`model.php`) hanya berisi struktur data (atribut), tidak ada logic.
2. **View** (`view.php`) hanya menampilkan data dari session dan mengirim
   input pengguna (form/link) ke `controller.php`.
3. **Controller** (`controller.php`) menerima input, memproses (menyimpan/menghapus
   data di session), lalu redirect kembali ke `view.php`.

Alur datanya: **View → Controller → Model/Session → kembali ke View**.

## Cara Menjalankan

1. Pastikan PHP sudah terinstall (atau pakai XAMPP/Laragon).
2. Taruh folder `mvc_mahasiswa` di dalam folder `htdocs` (XAMPP) atau folder
   web server kamu.
3. Nyalakan Apache, lalu buka di browser:
   ```
   http://localhost/mvc_mahasiswa/
   ```
   Atau jalankan PHP built-in server dari dalam folder ini:
   ```
   php -S localhost:8000
   ```
   lalu buka `http://localhost:8000/`

4. Gunakan tab **Mahasiswa** dan **Mata Kuliah** untuk menambah data terlebih
   dahulu, baru kemudian buka tab **Mahasiswa - Mata Kuliah** untuk membuat
   relasi antara keduanya.

## Catatan

- Data disimpan di **session**, jadi akan hilang saat session browser berakhir
  (misal browser ditutup total atau session timeout).
- Method **POST** dipakai untuk form tambah data (Create).
- Method **GET** dipakai untuk aksi hapus (Delete), karena hanya mengirim
  nomor index saja lewat URL — sama seperti pola di video tutorial.
