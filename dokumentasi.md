# 📄 Dokumentasi Aplikasi Web Never Potato!

**Nama Aplikasi:** Never Potato!  
**Teknologi:** PHP, MySQL, HTML, CSS, JavaScript  
**Database:** neverpotato  
**Server:** XAMPP (localhost)

---

## 🗄️ 1. Struktur Database

Database `neverpotato` memiliki 1 tabel yaitu `menu` dengan kolom:
`id`, `nama_menu`, `harga`, `emoji`, `kategori`, `created_at`

### Tampilan Database di phpMyAdmin

![Database neverpotato](db1.PNG)

![Tabel menu - struktur](db2.PNG)

---

## 🏠 2. Halaman Beranda (index.php)

Halaman utama yang menampilkan logo **Never Potato!**, gambar cup boba pixel art dengan animasi floating, dan tagline aplikasi.

Navigasi tersedia ke halaman: Beranda, Menu, +Menu Baru, dan Kelola.

![Halaman Beranda](beranda.PNG)

---

## 🧾 3. Halaman Menu (menu.php)

Menampilkan seluruh data menu yang tersimpan di database dalam bentuk card grid.

Setiap card menampilkan emoji ikon, nama menu, harga, dan kategori.

![Halaman Menu](menu.PNG)

---

## ➕ 4. Halaman Tambah Menu (tambah.php)

Form input data menu baru dengan field:
- Nama Menu
- Harga
- Emoji Ikon
- Kategori

### Form kosong (sebelum diisi)

![Form Tambah Menu](+menu.PNG)

### Form diisi (contoh: Never Potato Pink)

![Form Tambah Diisi](+menu2.PNG)

### Hasil setelah data disimpan — tampil di halaman Menu

![Menu Setelah Tambah](after+menu.PNG)

### Data tersimpan di database

![Database Setelah Tambah](db_after+menu.PNG)

---

## ✏️ 5. Halaman Edit Menu (edit.php)

Form edit data menu yang sudah ada. Data otomatis terisi sesuai data yang dipilih.

### Tampilan form edit

![Form Edit Menu](EditMenu.PNG)

### Hasil setelah data diedit — tampil di halaman Menu

![Menu Setelah Edit](afterEditMenu.PNG)

### Data terupdate di database

![Database Setelah Edit](db_afterEditMenu.PNG)

---

## 🗑️ 6. Halaman Kelola & Hapus (kelola.php)

Menampilkan semua menu dalam bentuk list dengan tombol **Edit** dan **Hapus** di setiap baris.

### Tampilan halaman Kelola

![Halaman Kelola](kelola.PNG)

### Konfirmasi hapus (modal popup)

Saat tombol Hapus diklik, muncul modal konfirmasi sebelum data benar-benar dihapus.

![Modal Konfirmasi Hapus](hapus.PNG)

### Tampilan Kelola setelah data dihapus

![Kelola Setelah Hapus](kelolaAfterDelete.PNG)

### Tampilan Menu setelah data dihapus

![Menu Setelah Hapus](menuAfterDelete.PNG)

### Database setelah data dihapus

![Database Setelah Hapus](db_afterDelete.PNG)

---

## ✅ Kesimpulan

Aplikasi **Never Potato!** berhasil menerapkan skema **CRUD** (Create, Read, Update, Delete) dengan:

| Operasi | File | Keterangan |
|--------|------|------------|
| **Create** | tambah.php | Menambah data menu baru |
| **Read** | index.php, menu.php | Menampilkan data dari database |
| **Update** | edit.php | Mengedit data menu yang ada |
| **Delete** | hapus.php, kelola.php | Menghapus data menu |