# Jobsheet 6 - Fetch API & JSON

Sub-CPMK: Menerapkan komunikasi asinkron (AJAX/fetch, JSON).

## Perubahan dari Jobsheet 5
- Tambah `data/buku.json` (10 objek) dan `data/anggota.json` (4 objek) sebagai pengganti sementara API sungguhan.
- `buku/list.html` & `anggota/list.html`: `<tbody>` dikosongkan, baris kini dirender dinamis oleh `assets/js/buku.js` / `assets/js/anggota.js` menggunakan `fetch` + `async/await`.
- Loading indicator (`#loading-indicator`) tampil selama proses fetch (disimulasikan dengan delay 600ms).
- Penanganan error (`try/catch`) menampilkan pesan di dalam tabel bila fetch gagal.
- `app.js`: `initHapusConfirm` diubah ke event delegation (`document.addEventListener("click", ...)`) karena tombol Hapus sekarang berada di baris yang dibuat setelah halaman selesai dimuat.
- `login.html`: warisan wireframe Login Jobsheet04, footer Jobsheet 6 (tidak pakai fetch).

## Struktur

```
P6/jobsheet-06/
|-- index.html               # shell Beranda, footer Jobsheet 6
|-- login.html               # wireframe Login jadi HTML statis
|-- assets/css/style.css     # tidak berubah dari P5
|-- assets/js/app.js         # initHapusConfirm delegation version
|-- assets/js/buku.js        # BARU: fetch + render Daftar Buku
|-- assets/js/anggota.js     # BARU: fetch + render Daftar Anggota
|-- data/buku.json           # BARU: 10 objek
|-- data/anggota.json        # BARU: 4 objek
|-- buku/list.html           # tbody kosong + loading-indicator + 2 script
|-- buku/tambah.html
|-- anggota/list.html        # tbody kosong + loading-indicator + 2 script
|-- anggota/tambah.html
|-- docs/wireframe.md        # identik P5
`-- README.md
```

Referensi: `references/PemogramanWeb2026/kode-praktikum/jobsheet-06/`
(`buku.js`, `anggota.js`, dan `app.js` delegasi disalin verbatim).

## Cara menjalankan

Penting: `fetch()` ke file lokal akan diblokir kebijakan CORS jika dibuka langsung dengan `file://`. Jalankan lewat server lokal, misalnya:

```bash
php -S localhost:8000
```

lalu buka `http://localhost:8000/index.html`. Bisa juga memakai ekstensi "Live Server" di VSCode, atau `python3 -m http.server 8000`.

Coba: tunggu teks "Memuat data..." lalu tabel terisi, ketik di kolom cari (filter tetap jalan di baris dinamis), klik Hapus (delegasi tetap jalan).

## Catatan
- Uji error handling dengan mengganti sementara nama file di `fetch(...)` menjadi nama yang salah (muncul baris `colspan=5` "Gagal memuat data").
- Pola `fetch` + `async/await` di sini akan dipakai ulang untuk memanggil endpoint PHP sungguhan mulai Jobsheet 9 (setelah back-end PostgreSQL siap di Jobsheet 8), meskipun mulai Jobsheet 7 rendering utama berpindah ke server-side PHP.

## Laporan Typst

`Jobsheet-typst-stuff/src/DnPWeb/JS-DnPWeb-06/JS06.typ`
-> compile: `typst compile --root . src/DnPWeb/JS-DnPWeb-06/JS06.typ`
Gambar laporan: `Jobsheet-typst-stuff/assets/JS-DnPWeb-06/`

Repo: https://github.com/SiputBiru/DnPWeb2026_20/tree/main/P6
