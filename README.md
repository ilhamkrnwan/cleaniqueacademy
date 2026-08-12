# Cleanique Academy

Website resmi **Cleanique Academy**, platform informasi dan promosi program pelatihan di bidang kimia, cleaning products, laundry, homecare, dan pengembangan bisnis terkait.

Project ini menggunakan **WordPress sebagai CMS** dengan **custom theme** yang dikembangkan secara manual agar memiliki kontrol penuh terhadap struktur HTML, desain, performa, SEO, dan pengembangan fitur dinamis.

---

## 1. Project Overview

Cleanique Academy pada awalnya berfokus sebagai landing page untuk memperkenalkan program pelatihan dan mengarahkan calon peserta menuju proses pendaftaran.

Seiring bertambahnya kegiatan, dokumentasi, program, trainer, testimonial, dan materi edukasi, website dikembangkan menjadi **content-driven academy website**.

Tujuan utama project:

- Menampilkan Cleanique Academy secara profesional.
- Menjadi sumber informasi resmi mengenai program pelatihan.
- Menampilkan riwayat kegiatan dan dokumentasi training.
- Meningkatkan kredibilitas melalui bukti kegiatan nyata.
- Mendukung SEO melalui struktur konten yang terorganisir.
- Menghasilkan lead melalui WhatsApp dan CTA pendaftaran.
- Memiliki arsitektur WordPress yang mudah dikembangkan.
- Meminimalkan dependency terhadap page builder.
- Mempertahankan performa website dalam jangka panjang.

---

# 2. Product Direction

Cleanique Academy bukan lagi sekadar single landing page.

Arah produk:

```text
Landing Page
     ↓
Academy Website
     ↓
Content Platform
     ↓
Digital Brand Asset
```

Website harus mampu menjadi pusat informasi mengenai:

- Program pelatihan
- Kegiatan
- Trainer
- Dokumentasi
- Testimonial
- Artikel edukasi
- Profil academy
- Informasi pendaftaran

Homepage tetap berfungsi sebagai **marketing landing page**, sedangkan halaman internal menjadi sistem informasi yang lebih terstruktur.

---

# 3. Core Principles

Project ini mengikuti beberapa prinsip utama.

## Performance First

Website harus ringan dan menghindari dependency yang tidak diperlukan.

Prioritas:

- Minimal JavaScript
- Minimal CSS
- Optimized images
- Lazy loading
- Responsive images
- Font optimization
- Semantic HTML
- Tidak menggunakan library besar tanpa alasan
- Tidak menggunakan page builder untuk seluruh website

## Content First

Konten harus dapat dikelola oleh admin tanpa mengubah kode.

Contoh:

```text
Admin
  ↓
Tambah Kegiatan
  ↓
Isi informasi
  ↓
Upload dokumentasi
  ↓
Publish
  ↓
Website otomatis membuat halaman
```

## Reusability

Komponen yang digunakan berulang harus dibuat reusable.

Contoh:

- CTA
- Button
- Card
- Section heading
- Program card
- Activity card
- Testimonial card
- Gallery
- Trainer card

## Maintainability

Kode harus mudah dipahami oleh developer lain maupun AI coding agent.

Hindari:

- File terlalu besar
- Logic bercampur dengan markup
- Hardcoded content yang seharusnya berasal dari CMS
- Duplicate code
- Dependency yang tidak diperlukan

## SEO Friendly

Setiap halaman harus memiliki struktur SEO yang jelas.

Prioritas:

- Semantic HTML
- Heading hierarchy
- Internal linking
- Metadata
- Open Graph
- Schema markup
- Sitemap compatibility
- Clean URL
- Optimized images

---

# 4. Technology Stack

## CMS

**WordPress**

WordPress digunakan sebagai content management system.

## Theme

Custom WordPress Theme.

Tidak menggunakan Oxygen sebagai fondasi utama website.

## Custom Content

Menggunakan:

- Custom Post Types
- Advanced Custom Fields / ACF
- Taxonomies
- WordPress Media Library

## Frontend

- PHP
- HTML5
- CSS
- JavaScript vanilla bila memungkinkan

Framework frontend hanya digunakan apabila benar-benar diperlukan.

## Development

Recommended environment:

- Local WordPress
- Git
- GitHub
- AI coding agent

Recommended coding agents:

- Claude Code
- Codex CLI
- Cursor
- OpenCode

---

# 5. Project Architecture

Struktur high-level:

```text
WordPress
│
├── Custom Theme
│
├── Custom Content Model
│
├── ACF
│
├── Custom Post Types
│
├── Taxonomies
│
└── Media Library
```

Presentation layer:

```text
Custom Theme
```

Content/data layer:

```text
WordPress + CPT + ACF
```

---

# 6. Content Architecture

Website menggunakan beberapa jenis konten.

## Pages

Digunakan untuk halaman statis.

Contoh:

```text
Home
Tentang
Kontak
```

## Posts

Digunakan untuk artikel dan konten edukasi.

## Custom Post Types

### Program

Merepresentasikan program pelatihan.

Contoh:

```text
/program/
```

### Kegiatan

Merepresentasikan aktivitas training/event yang telah atau akan dilaksanakan.

Contoh:

```text
/kegiatan/
```

### Testimoni

Merepresentasikan testimonial peserta.

---

# 7. Kegiatan System

Kegiatan merupakan salah satu fitur utama website.

Tujuan fitur ini adalah membuat **history kegiatan Cleanique Academy** yang terstruktur.

Contoh:

```text
/kegiatan/
/kegiatan/pelatihan-kimia-laundry-pekanbaru-2025/
/kegiatan/pelatihan-kimia-laundry-yogyakarta-2026/
```

## Activity Fields

Setiap kegiatan dapat memiliki:

```text
Judul kegiatan
Tanggal kegiatan
Lokasi
Kota
Kategori kegiatan
Jumlah peserta
Trainer
Deskripsi
Materi
Thumbnail
Gallery
Video
Testimoni
CTA
```

Field dapat dikembangkan sesuai kebutuhan.

## Activity Taxonomy

Contoh kategori:

```text
Jenis Kegiatan
├── Pelatihan
├── Workshop
├── Seminar
└── Event
```

Taxonomy lokasi:

```text
Lokasi
├── Yogyakarta
├── Jakarta
├── Bandung
├── Pekanbaru
├── Bali
└── Lainnya
```

---

# 8. Activity Archive

Halaman:

```text
/kegiatan/
```

Menampilkan seluruh kegiatan.

Fitur yang direncanakan:

- Listing kegiatan
- Pagination
- Filter kategori
- Filter tahun
- Filter lokasi
- Search
- Sorting berdasarkan tanggal

Contoh struktur:

```text
Kegiatan Cleanique Academy

2026
 ├── Pelatihan A
 ├── Pelatihan B
 └── Workshop C

2025
 ├── Pelatihan D
 ├── Pelatihan E
 └── Workshop F
```

---

# 9. Single Activity

Halaman detail kegiatan.

Contoh:

```text
/kegiatan/nama-kegiatan/
```

Struktur:

```text
Hero
│
├── Judul
├── Tanggal
├── Lokasi
└── Kategori
│
├── Overview
│
├── Tentang Kegiatan
│
├── Materi
│
├── Trainer
│
├── Dokumentasi
│
├── Testimoni
│
├── Related Activities
│
└── CTA
```

---

# 10. Program System

Program merupakan produk utama Cleanique Academy.

Halaman:

```text
/program/
```

Contoh:

```text
/program/pelatihan-kimia-laundry/
/program/pelatihan-homecare/
/program/private-training/
```

Program harus memiliki informasi:

```text
Judul
Deskripsi
Target peserta
Materi
Durasi
Trainer
Fasilitas
Harga / informasi pendaftaran
FAQ
Gallery
CTA
```

---

# 11. Homepage

Homepage merupakan halaman conversion utama.

Homepage bukan tempat untuk menampilkan seluruh informasi.

Homepage bertugas:

1. Memperkenalkan Cleanique Academy.
2. Menunjukkan value proposition.
3. Menampilkan program utama.
4. Menunjukkan credibility.
5. Menampilkan kegiatan terbaru.
6. Mengarahkan user ke pendaftaran.

Struktur umum:

```text
Header
│
├── Hero
│
├── Trust / Statistic
│
├── Program Unggulan
│
├── Kenapa Cleanique Academy
│
├── What You Get
│
├── Latest Activities
│
├── Testimonial
│
├── Gallery / Documentation
│
├── FAQ
│
├── CTA
│
└── Footer
```

---

# 12. About System

Halaman tentang academy digunakan untuk membangun kredibilitas.

Konten yang dapat ditampilkan:

- Tentang Cleanique Academy
- Sejarah
- Pengalaman
- Fokus pelatihan
- Trainer
- Methodology
- Ecosystem
- Partner
- Dokumentasi

Homepage hanya menampilkan ringkasan.

Detail berada di:

```text
/tentang/
```

---

# 13. Trainer System (Disabled / Excluded)

> Note: Sesuai arahan, fitur Trainer saat ini tidak digunakan dan dihapus dari lingkup pengembangan.

---

# 14. Testimonial System

Testimonial digunakan untuk meningkatkan conversion dan trust.

Data:

```text
Nama
Foto
Profesi / bisnis
Lokasi
Testimonial
Program
Tanggal
```

Testimonial dapat ditampilkan pada:

- Homepage
- Detail program
- Detail kegiatan

---

# 15. Gallery System

Gallery digunakan untuk dokumentasi visual.

Sumber gambar berasal dari:

```text
WordPress Media Library
```

Gallery dapat digunakan pada:

- Kegiatan
- Program
- Homepage
- About

Prioritas performance:

- WebP/AVIF jika tersedia
- Responsive image
- Lazy loading
- Ukuran file terkontrol
- Tidak memuat gambar full-resolution tanpa kebutuhan

---

# 16. URL Structure

URL harus sederhana dan konsisten.

Contoh:

```text
/
 /program/
 /program/nama-program/
 /kegiatan/
 /kegiatan/nama-kegiatan/
 /trainer/
 /tentang/
 /artikel/
 /artikel/judul-artikel/
 /kontak/
```

Hindari URL:

```text
/?p=123
/page?id=123
/category/page/123
```

Clean URL menjadi prioritas.

---

# 17. SEO Strategy

SEO dilakukan pada dua level.

## Technical SEO

Meliputi:

- Semantic HTML
- Title
- Meta description
- Canonical URL
- Sitemap
- Robots
- Open Graph
- Twitter/X metadata
- Schema
- Heading structure
- Internal linking
- Image alt
- Clean URL

## Content SEO

Konten diarahkan ke topik:

```text
Pelatihan Kimia
Pelatihan Laundry
Kimia Laundry
Chemical Homecare
Formulasi Produk
Bisnis Laundry
Produk Cleaning
Pelatihan Bisnis Cleaning
```

Halaman kegiatan juga memiliki nilai SEO karena menciptakan landing pages berdasarkan aktivitas nyata.

---

# 18. Performance Strategy

Performance merupakan requirement utama.

Target:

- Fast initial render
- Good Core Web Vitals
- Minimal JS
- Minimal blocking resources
- Optimized images
- Efficient CSS
- Efficient queries

## Rules

Jangan:

```text
Load semua asset di seluruh halaman.
```

Gunakan:

```text
Load hanya asset yang diperlukan halaman.
```

Contoh:

```php
if (is_singular('kegiatan')) {
    // enqueue activity-specific assets
}
```

Optimasi juga harus memperhatikan:

- WordPress query count
- Database query
- Image dimensions
- Font loading
- Third-party scripts
- Analytics
- Tracking scripts
- Plugin overhead

---

# 19. Accessibility

Website harus mempertimbangkan accessibility.

Minimal requirement:

- Semantic HTML
- Keyboard navigation
- Proper heading hierarchy
- Alt image
- Accessible buttons
- Visible focus state
- Contrast yang memadai
- Form label
- Aria hanya jika diperlukan

---

# 20. Responsive Design

Website harus mendukung:

```text
Mobile
Tablet
Desktop
Large Desktop
```

Mobile-first approach direkomendasikan.

Breakpoint tidak boleh dibuat berdasarkan device tertentu saja.

Gunakan layout yang responsif terhadap ukuran viewport.

---

# 21. Design System

Theme harus menggunakan design token.

Contoh:

```css
:root {
  --color-primary: ...;
  --color-secondary: ...;
  --color-text: ...;
  --color-muted: ...;
  --color-background: ...;

  --font-heading: ...;
  --font-body: ...;

  --radius-sm: ...;
  --radius-md: ...;
  --radius-lg: ...;

  --container-width: ...;
}
```

Tujuan:

- Konsistensi
- Mudah redesign
- Mudah maintenance
- Mudah digunakan AI agent

---

# 22. Component Strategy

Komponen reusable yang direkomendasikan:

```text
Button
Container
Section
Section Heading
Card
Program Card
Activity Card
Trainer Card
Testimonial Card
Gallery
CTA
Breadcrumb
Pagination
Filter
FAQ
```

Komponen tidak boleh dibuat terlalu abstrak.

Prioritas utama adalah:

```text
Reusable
Simple
Readable
Maintainable
```

---

# 23. Theme Structure

Suggested structure:

```text
cleanique-academy/
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── fonts/
│
├── inc/
│   ├── theme.php
│   ├── enqueue.php
│   ├── post-types.php
│   ├── taxonomies.php
│   ├── acf.php
│   ├── helpers.php
│   ├── seo.php
│   └── performance.php
│
├── template-parts/
│   ├── global/
│   ├── home/
│   ├── kegiatan/
│   ├── program/
│   ├── trainer/
│   └── components/
│
├── front-page.php
├── home.php
├── index.php
├── single.php
├── archive.php
├── page.php
├── single-kegiatan.php
├── archive-kegiatan.php
├── single-program.php
├── archive-program.php
├── single-trainer.php
├── archive-trainer.php
├── page-tentang.php
├── page-kontak.php
├── search.php
├── 404.php
├── functions.php
├── header.php
├── footer.php
└── style.css
```

Struktur final dapat berubah berdasarkan implementasi.

---

# 24. Custom Plugin

Content model dapat dipisahkan dari theme menggunakan plugin:

```text
cleanique-academy-core
```

Plugin menangani:

- CPT
- Taxonomy
- ACF registration
- Custom helper
- Content model

Theme menangani:

- UI
- Layout
- Template
- CSS
- JavaScript

Prinsip:

```text
Plugin = Data
Theme = Presentation
```

Dengan pemisahan ini, data tetap aman ketika theme diganti.

---

# 25. WordPress Admin Experience

Admin harus dapat melakukan aktivitas utama tanpa coding.

Contoh workflow:

```text
WP Admin
   ↓
Kegiatan
   ↓
Tambah Baru
   ↓
Isi Data
   ↓
Upload Gallery
   ↓
Pilih Trainer
   ↓
Pilih Kategori
   ↓
Publish
```

Output otomatis:

```text
Archive
Single Activity
Related Content
Homepage Latest Activities
```

---

# 26. AI Coding Workflow

Project akan banyak dikembangkan menggunakan AI coding agent.

AI agent tidak boleh bekerja tanpa memahami architecture.

Sebelum melakukan perubahan besar, agent wajib membaca:

```text
README.md
AGENTS.md
docs/
```

Recommended documentation:

```text
docs/
├── architecture.md
├── content-model.md
├── design-system.md
├── seo.md
├── performance.md
└── deployment.md
```

---

# 27. AI Agent Rules

AI agent harus:

1. Membaca struktur project sebelum melakukan perubahan.
2. Tidak melakukan rewrite besar tanpa alasan.
3. Mengikuti architecture yang sudah ditentukan.
4. Tidak menambahkan dependency baru tanpa kebutuhan.
5. Tidak menggunakan inline CSS berlebihan.
6. Tidak membuat duplicate implementation.
7. Tidak mengubah data production secara langsung.
8. Memastikan compatibility dengan WordPress.
9. Menjaga backwards compatibility jika diperlukan.
10. Menjelaskan perubahan yang dibuat.
11. Melakukan validation setelah perubahan.
12. Menghindari overengineering.

---

# 28. Git Workflow

Gunakan Git sejak awal.

Branch utama:

```text
main
```

Development:

```text
feature/homepage
feature/kegiatan
feature/program
feature/trainer
feature/seo
feature/performance
```

Commit harus memiliki tujuan jelas.

Contoh:

```text
feat: add kegiatan custom post type
feat: create activity archive
feat: create single activity template
fix: optimize responsive gallery
perf: reduce homepage asset loading
seo: add activity schema
```

---

# 29. Development Workflow

Recommended workflow:

```text
1. Analyze
2. Plan
3. Implement
4. Test
5. Review
6. Commit
```

Untuk perubahan besar:

```text
Requirement
    ↓
Architecture
    ↓
Implementation
    ↓
QA
    ↓
Performance Check
    ↓
Deploy
```

---

# 30. Development Environment

Recommended:

```text
Local WordPress
Git
GitHub
PHP
MySQL/MariaDB
Node.js jika diperlukan
Composer jika diperlukan
```

Development dilakukan di local environment terlebih dahulu.

Production tidak digunakan sebagai environment untuk eksperimen.

---

# 31. Deployment

Recommended deployment flow:

```text
Local
  ↓
Git
  ↓
GitHub
  ↓
Production
```

Sebelum deployment:

```text
Code validation
Responsive testing
Performance testing
SEO testing
Broken link check
Form testing
WhatsApp CTA testing
```

---

# 32. Security

Security requirement:

- WordPress updated
- Theme updated
- Plugin minimal
- Sanitize input
- Escape output
- Nonce validation
- Capability checks
- Tidak menyimpan credential di repository
- Tidak commit `.env`
- Tidak commit secret/API key

Contoh:

```text
.env
*.key
credentials.json
```

harus masuk `.gitignore`.

---

# 33. Analytics

Analytics dan tracking harus dipasang secara efisien.

Possible tools:

```text
Google Analytics
Google Search Console
Meta Pixel
```

Third-party scripts tidak boleh dimuat secara berlebihan.

Jika memungkinkan:

- delay non-critical scripts
- defer scripts
- consent-aware loading
- hanya load tracking jika diperlukan

---

# 34. Conversion Strategy

Conversion utama:

```text
WhatsApp
```

CTA utama harus jelas.

Contoh:

```text
Daftar Pelatihan
Konsultasi Sekarang
Tanya Jadwal
Hubungi Kami
```

CTA harus muncul secara strategis tanpa membuat website menjadi spammy.

---

# 35. Future Features

Fitur berikut tidak menjadi prioritas pada fase pertama tetapi harus dipertimbangkan dalam architecture.

```text
Event registration
Online booking
Payment
Participant database
Digital certificate
Member area
Training material
Alumni database
Email automation
CRM
Online course
Dashboard peserta
```

Architecture saat ini harus cukup fleksibel untuk dikembangkan ke arah tersebut tanpa harus melakukan rewrite total.

---

# 36. MVP Scope

Target redesign awal:

## Must Have

```text
Custom WordPress Theme
Homepage
Program
Kegiatan
Single Kegiatan
Testimonial
About
Contact
Responsive Design
SEO Foundation
Performance Optimization
```

## Should Have

```text
Activity Filtering
Related Content
Gallery
FAQ
Schema
Advanced Internal Linking
```

## Later

```text
Booking
Payment
Member Area
Certificate
Participant Dashboard
CRM Integration
Online Learning
```

---

# 37. One Week Development Target

Target sprint:

## Day 1

Foundation dan architecture.

## Day 2

Homepage.

## Day 3

CPT + ACF + content model.

## Day 4

Activity system.

## Day 5

Program, trainer, about.

## Day 6

SEO dan performance.

## Day 7

QA, polish, deployment.

Prioritas utama:

```text
Architecture
→ Content System
→ UI
→ SEO
→ Performance
→ QA
```

---

# 38. Definition of Done

Sebuah fitur dianggap selesai apabila:

```text
[ ] Functionality works
[ ] Responsive
[ ] Semantic HTML
[ ] SEO considered
[ ] Performance considered
[ ] Accessible
[ ] No console errors
[ ] No PHP errors
[ ] No broken links
[ ] Tested on mobile
[ ] Tested on desktop
[ ] Git committed
```

---

# 39. Non-Goals

Project ini tidak bertujuan untuk:

- Membuat custom CMS dari nol.
- Menggantikan WordPress.
- Membuat frontend framework kompleks tanpa kebutuhan.
- Menambah banyak plugin hanya demi fitur kecil.
- Membuat internal framework yang sulit dipelihara.
- Mengoptimalkan semua hal sebelum fitur utama selesai.

Prinsip:

> Build what is needed, keep the architecture extensible.

---

# 40. Long-Term Vision

Cleanique Academy diharapkan berkembang dari:

```text
Company Landing Page
```

menjadi:

```text
Academy Website
```

dan kemudian:

```text
Academy Digital Platform
```

Dengan struktur:

```text
                    CLEANIQUE ACADEMY
                           │
          ┌────────────────┼────────────────┐
          │                │                │
          ↓                ↓                ↓
       PROGRAM         KEGIATAN          ARTIKEL
          │                │                │
          ↓                ↓                ↓
      Pelatihan         History          Edukasi
          │           Dokumentasi          │
          └────────────────┼────────────────┘
                           ↓
                      TRUST / SEO
                           ↓
                     LEAD GENERATION
                           ↓
                        WHATSAPP
```

---

# 41. Final Architecture Philosophy

Cleanique Academy harus tetap terasa seperti website marketing yang cepat dan modern, tetapi memiliki fondasi CMS yang mampu menangani pertumbuhan konten.

Prinsip akhirnya:

```text
WordPress
    +
Custom Theme
    +
Structured Content
    +
ACF / CPT
    +
SEO
    +
Performance
    +
AI-assisted Development
```

Tujuan akhirnya bukan membuat website yang paling kompleks.

Tujuannya adalah membuat website yang:

**cepat, mudah dikelola, mudah dikembangkan, SEO-friendly, terlihat profesional, dan mampu menjadi aset digital jangka panjang Cleanique Academy.**
