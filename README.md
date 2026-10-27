# 📊 Sistem Rekap Nilai Mahasiswa (AdminLTE 4 & PHP Native)

Aplikasi berbasis web untuk mengelola data rekapitulasi nilai mahasiswa yang dibangun menggunakan template **AdminLTE 4**, **PHP Native**, dan database **MySQL**. Project ini dikembangkan untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web.

---

## 🚀 Fitur Utama
1. **CRUD Mahasiswa (Create, Read, Update, Delete)**:
   - **Tambah Data**: Dilengkapi modal pop-up interaktif, validasi NIM (10 digit), dan form upload foto profil.
   - **Edit Data**: Menggunakan modal pop-up dinamis pada setiap baris data untuk memperbarui informasi dan foto tanpa berpindah halaman.
   - **Hapus Data**: Menghapus data mahasiswa beserta file foto terkait dari server.
2. **Pencarian & Filter Pintar**:
   - Pencarian data mahasiswa berdasarkan **Nama Lengkap** dengan tombol cari khusus.
   - Filter otomatis berdasarkan **Predikat** (*Sangat Memuaskan, Memuaskan, Cukup Memuaskan, Kurang Memuaskan, Tidak Lulus*).
3. **Sorting (Pengurutan Data)**:
   - Fitur pengurutan data secara *Ascending* (▲) atau *Descending* (▼) pada kolom **Nama Lengkap** dan **Nilai Akhir** menggunakan fungsi bawaan SQL `ORDER BY`.
4. **Paginasi (Pagination)**:
   - Pengaturan jumlah tampilan data per halaman yang fleksibel (**5, 10, atau 15 data per halaman**) dengan navigasi halaman di bagian kanan bawah.
5. **Manajemen Foto Profil**:
   - Setiap mahasiswa memiliki foto yang di-upload dan disimpan di dalam folder `img/` lokal server.

---

