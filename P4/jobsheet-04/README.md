# Jobsheet 4 — UI/UX Design (Wireframe & User Flow)

Sub-CPMK: Merancang UI/UX aplikasi (proyek).

Tidak ada perubahan kode — halaman HTML/CSS sama persis dengan `P3/jobsheet-03`.
Tambah `docs/wireframe.md`: wireframe teks + user flow untuk fitur yang **belum dibangun**
(Login, Dashboard Petugas, Peminjaman, Pengembalian, Riwayat).

## Struktur

```
P4/jobsheet-04/
|-- index.html               # sama persis P3/jobsheet-03
|-- assets/css/style.css     # sama persis P3 (#1d5b8a theme)
|-- buku/                    # sama persis P3
|-- anggota/                 # sama persis P3
|-- docs/wireframe.md        # BARU — rancangan fitur belum dikoding
|-- Infografis.png           # infografis UI/UX (dari references)
`-- README.md
```

Referensi: `references/PemogramanWeb2026/kode-praktikum/jobsheet-04/`
(Dokumentasi 6 bab + `docs/wireframe.md` canonical).

Dokumen `docs/wireframe.md` menjadi acuan struktur HTML baru yang mulai
diimplementasikan pada Jobsheet 5+ (interaktivitas JS, lalu PHP/PostgreSQL
untuk Login & Peminjaman).

## Cara menjalankan

Sama seperti Jobsheet 3 — buka `index.html` di browser (tidak butuh server):

```bash
xdg-open index.html
# atau via server statis:
npx serve .
```

## Laporan Typst

`Jobsheet-typst-stuff/src/DnPWeb/JS-DnPWeb-04/JS04.typ`
-> compile: `typst compile --root . src/DnPWeb/JS-DnPWeb-04/JS04.typ`
Gambar laporan: `Jobsheet-typst-stuff/assets/JS-DnPWeb-04/`

Repo: https://github.com/SiputBiru/DnPWeb2026_20/tree/main/P4
