# Jobsheet 5 - JavaScript DOM & Event

Sub-CPMK: Menerapkan manipulasi DOM & event JavaScript.

## Perubahan dari Jobsheet 4
- Tambah `assets/js/app.js`.
- Hamburger menu: checkbox hack (CSS) diganti tombol + JS (`nav.classList.toggle("nav-open")`).
- Form Tambah Buku & Tambah Anggota: validasi client-side (`initValidasiForm`) - field wajib, rentang tahun, stok non-negatif - pesan error tampil inline via manipulasi DOM (`insertAdjacentElement`).
- Tabel Daftar Buku & Daftar Anggota: kolom pencarian real-time (`initTableFilter`) yang menyaring baris via `keyup`.
- Tombol Hapus (`.btn-hapus`): menampilkan `confirm()` lalu menghapus baris dari tampilan (masih front-end saja, belum ke server).
- Tambah `login.html`: implementasi wireframe Login Jobsheet04 dengan nav JS baru (ikut `initNavToggle` + `initValidasiForm` via `form-tambah`).

## Struktur

```
P5/jobsheet-05/
|-- index.html               # button#nav-toggle-btn + script app.js
|-- login.html               # wireframe Login jadi HTML statis + JS hooks
|-- assets/css/style.css     # tambah .error, .search-box, nav.nav-open
|-- assets/js/app.js         # BARU: 4 init + guard + DOMContentLoaded
|-- buku/list.html           # search-box + .btn-hapus + script
|-- buku/tambah.html         # id="form-tambah" + script
|-- anggota/list.html        # search-box + .btn-hapus + script
|-- anggota/tambah.html      # id="form-tambah" + script
|-- docs/wireframe.md        # identik P4
`-- README.md
```

Referensi: `references/PemogramanWeb2026/kode-praktikum/jobsheet-05/`
(`app.js` disalin verbatim, HTML/CSS mengikuti pola hooks di atas).

## Cara menjalankan

Buka `index.html` di browser. Coba: submit form kosong (muncul error), ketik di kolom cari (tabel tersaring), klik Hapus (muncul konfirmasi).

```bash
xdg-open index.html
```

## Catatan
- Validasi di sini murni client-side dan bisa dilewati (nonaktifkan JS). Validasi server-side ditambahkan di Jobsheet 7 sebagai lapisan kedua yang wajib.
- Hapus baris di jobsheet ini hanya menghilangkan dari tampilan (belum persisten) - akan diganti proses hapus sungguhan ke database mulai Jobsheet 9.

## Laporan Typst

`Jobsheet-typst-stuff/src/DnPWeb/JS-DnPWeb-05/JS05.typ`
-> compile: `typst compile --root . src/DnPWeb/JS-DnPWeb-05/JS05.typ`
Gambar laporan: `Jobsheet-typst-stuff/assets/JS-DnPWeb-05/`

Repo: https://github.com/SiputBiru/DnPWeb2026_20/tree/main/P5
