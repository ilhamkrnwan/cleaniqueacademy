# Laporan Template Halaman Custom - Cleanique Academy

Dokumen ini berisi daftar lengkap dan dokumentasi seluruh **Custom Page Templates**, **CPT Archive Templates**, **Taxonomy Templates**, dan **Component Parts** yang dikembangkan untuk custom theme **Cleanique Academy** (`wp-content/themes/cleanique-academy`).

---

## 1. Ringkasan Template Halaman (Page Templates)

| Berkas Template | Nama Template (WP Custom Name) | Peruntukan & Fitur Utama |
| :--- | :--- | :--- |
| `front-page.php` | *(Front Page / Landing)* | Marketing Landing Page utama tanpa navigasi bertumpuk, memuat Hero Banner, Value Proposition, Katalog Program, Statistik Alumni, Testimoni, Promo Banner, dan CTA WhatsApp. |
| `page-tentang-kami.php` | `Halaman Tentang Kami` | Profil Perusahaan PT Indotech Berkah Abadi, Sejarah sejak 2011, Visi-Misi, Ringkasan Program, FAQ umum, dan Kontak Kantor Pusat. |
| `page-program-pelatihan.php` | `Halaman Program Pelatihan` | Katalog lengkap program pelatihan kimia laundry, homecare, dan housekeeping lengkap dengan filter kategori & tombol CTA Pendaftaran. |
| `page-dokumentasi-event.php` | `Halaman Dokumentasi Event` | Dokumentasi visual kegiatan praktikum, galeri foto pelatihan, dan highlight event yang telah diselenggarakan di berbagai kota. |
| `page-artikel.php` | `Halaman Artikel` | Pusat edukasi dan artikel formulasi kimia kebersihan, tips laundry, serta panduan bisnis homecare. |
| `page-faq.php` | `Halaman FAQ` | Pusat informasi pertanyaan umum (FAQ) seputar fasilitas, lokasi, metode pelatihan tatap muka, dan konsultasi alumni. |
| `page-kontak.php` | `Halaman Kontak` | Informasi alamat penyelenggaraan, WhatsApp Official, email resmi, jam operasional, serta form/tombol konsultasi cepat. |
| `page.php` | *(Default Page)* | Template bawaan untuk halaman statis generik dengan Page Hero clean dan struktur artikel standar. |

---

## 2. Template Custom Post Type (CPT) & Detail Konten

| Berkas Template | Peruntukan | Deskripsi & Fitur |
| :--- | :--- | :--- |
| `single-kegiatan.php` | Detail Kegiatan CPT | Halaman detail sejarah/dokumentasi event pelatihan, memuat info tanggal, lokasi, jumlah peserta, materi praktikum, serta CTA konsultasi event serupa. |
| `single-program.php` | Detail Program CPT | Halaman detail produk pelatihan, memuat target peserta, durasi intensive, estimasi investasi/biaya, fasilitas yang didapat, dan CTA pendaftaran WA. |
| `single.php` | Detail Artikel Posts | Detail artikel edukasi dengan fitur otomatis **Estimasi Waktu Baca (Reading Time)**, **Daftar Isi Otomatis (Table of Contents / TOC)** dari tag H2/H3, serta rekomendasi artikel terkait. |

---

## 3. Template Arsip & Taksonomi (Archive & Taxonomy Templates)

| Berkas Template | Peruntukan | Deskripsi & Fitur |
| :--- | :--- | :--- |
| `archive-kegiatan.php` | Arsip CPT Kegiatan | Menampilkan seluruh daftar kegiatan/event pelatihan dengan pagination dan badge lokasi/tanggal. |
| `archive-program.php` | Arsip CPT Program | Menampilkan katalog seluruh program pelatihan dengan harga dan target peserta. |
| `taxonomy-jenis_kegiatan.php` | Taksonomi `jenis_kegiatan` | Filter kegiatan berdasarkan jenis (Pelatihan, Workshop, Seminar, Event) dilengkapi dengan tab navigasi antar-kategori. |
| `taxonomy-lokasi_kegiatan.php` | Taksonomi `lokasi_kegiatan` | Filter kegiatan berdasarkan kota/lokasi (Yogyakarta, Jakarta, Pekanbaru, dll.) dengan tab navigasi lokasi. |
| `taxonomy-kategori_program.php` | Taksonomi `kategori_program` | Filter program pelatihan berdasarkan kategori (Chemical Laundry, Homecare, Otomotif, Housekeeping). |
| `category.php` | Kategori Artikel (Posts) | Indeks artikel edukasi berdasarkan kategori standar WordPress dengan tab navigasi filter. |
| `archive.php` | Arsip Umum WordPress | Fallback arsip bulanan, penulis, maupun tag artikel. |

---

## 4. Template Sistem & Komponen (System & Component Templates)

| Berkas Template | Peruntukan | Deskripsi & Fitur |
| :--- | :--- | :--- |
| `search.php` | Hasil Pencarian | Halaman hasil pencarian kata kunci di seluruh website dengan badge jenis tipe konten dan pesan penanganan jika tidak ditemukan. |
| `404.php` | Error Page | Halaman pemberitahuan 404 ketika tautan tidak ditemukan dengan navigasi kembali ke beranda. |
| `index.php` | Fallback Utama | Fallback dasar WordPress. |
| `header.php` | Header Website | Header kondisional: Landing Page Header (Header sederhana logo + WA) pada Front Page vs Company Profile Header (dengan Mobile Drawer Navigation) pada halaman internal. |
| `footer.php` | Footer Website | Footer kaya informasi PT Indotech Berkah Abadi dengan link navigasi, sosial media resmi (Instagram, Facebook, WhatsApp SVG), dan hak cipta. |
| `template-parts/page-hero.php` | Reusable Component | Reusable Hero Header component untuk halaman internal dengan penunjuk breadcrumb dinamis. |

---

## 5. Kepatuhan Terhadap Aturan Desain & Aturan Proyek

1. **Bebas Icon Sistem / Emoji**:
   - Seluruh berkas template telah diperiksa dan dibersihkan dari emoji OS (seperti 📍, 📅, 👥, 💰, ⏱️, 📱, ✉️, dll.) demi menjaga standar profesionalisme dan tampilan badge yang bersih.
2. **Icon Sosial Media Resmi**:
   - Seluruh icon media sosial (WhatsApp, Instagram, Facebook) pada `header.php`, `footer.php`, dan komponen halaman menggunakan ikon SVG resmi berukuran terstandarisasi.
3. **Single Page Landing Page**:
   - Front Page (`front-page.php`) menggunakan Landing Header independen tanpa menu navigasi bertumpuk, memfokuskan alur konversi langsung menuju WhatsApp CTA.
