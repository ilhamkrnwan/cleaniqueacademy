<?php
require_once 'c:/laragon/www/cleaniqueacademy/wp-load.php';
require_once ABSPATH . 'wp-admin/includes/taxonomy.php';

$articles = array(
    array(
        'title'    => 'Panduan Formulasi Deterjen Cair Laundry Industri untuk Pemula',
        'category' => 'Edukasi Kimia',
        'content'  => '<h2>Pengenalan Surfaktan & Emulsi Deterjen</h2><p>Deterjen cair merupakan salah satu produk kebersihan dengan tingkat pemakaian tertinggi di industri laundry maupun rumah tangga. Untuk membuat deterjen cair berkualitas tinggi, penentuan jenis surfaktan primer dan sekunder sangat menentukan daya angkat noda dan busa.</p><h2>Bahan-Bahan Utama Formulasi Deterjen</h2><p>Bahan utama yang dibutuhkan meliputi LABS/Texapon sebagai surfaktan pelarut lemak, Sodium Sulfat sebagai pembangun viskositas, Fixative pengikat aroma, serta EDTA sebagai pengkelat kesadahan air.</p><h2>Langkah Praktikum Meracik Deterjen</h2><p>Pelajari takaran persentase aman dan urutan pencampuran zat aditif agar larutan homogen, stabil, dan tidak mengalami pengendapan saat disimpan dalam kemasan botol.</p>',
    ),
    array(
        'title'    => 'Cara Mengatasi Sabun Cair Mengendap atau Memisah Saat Produksi',
        'category' => 'Edukasi Kimia',
        'content'  => '<h2>Penyebab Utama Emulsi Sabun Memisah</h2><p>Proses emulsi yang gagal biasanya disebabkan oleh ketidakseimbangan rasio air dan minyak, suhu pencampuran yang terlalu panas, atau penggunaan garam pengental secara berlebihan.</p>2>Solusi Troubleshooting di Lapangan</h2><p>Gunakan pengadukan dengan kecepatan konstan, atur pH larutan pada rentang 7-8, dan tambahkan agen pemantap emulsi seperti CAPB untuk menjaga kestabilan larutan.</p>',
    ),
    array(
        'title'    => 'Rahasia Formulasi Parfum Laundry Tahan Lama dengan Fiksatif',
        'category' => 'Formulasi Produk',
        'content'  => '<h2>Memahami Komposisi Aroma Parfum</h2><p>Parfum berkualitas terdiri dari Top Notes yang muncul di awal, Middle Notes sebagai karakter utama, dan Base Notes yang bertahan lama di serat kain.</p><h2>Fungsi Fiksatif Pengikat Aroma</h2><p>Penggunaan fiksatif berkualitas tinggi mencegah evaporasi alkohol terlalu cepat, sehingga keharuman pakaian terjaga hingga 30 hari dalam plastik laundry.</p>',
    ),
    array(
        'title'    => 'Teknik Pembuatan Sabun Cuci Piring Ekstra Busa & Lembut di Tangan',
        'category' => 'Formulasi Produk',
        'content'  => '<h2>Komposisi Formula Sabun Cuci Piring</h2><p>Kombinasi asam sulfonat dan NaCl menghasilkan viskositas kental dengan karakter busa melimpah namun tetap mudah dibilas tanpa meninggalkan residu.</p><h2>Penambahan Bahan Pelindung Kulit (Emollient)</h2><p>Tambahkan Gliserin atau Aloe Vera extract untuk menjaga kelembapan kulit tangan pengguna selama mencuci peralatan dapur.</p>',
    ),
    array(
        'title'    => 'Panduan Menghitung HPP & Strategi Penetapan Harga Jual Chemical',
        'category' => 'Tips Bisnis',
        'content'  => '<h2>Pengertian HPP dalam Industri Chemical</h2><p>HPP menghitung modal bersih per liter produk, meliputi biaya bahan baku, botol kemasan, stiker label, serta alokasi penyusutan alat dan listrik.</p><h2>Menentukan Margin Keuntungan Komersial</h2><p>Dapatkan persentase profit margin yang ideal untuk pasar B2B laundry komersial maupun B2C eceran rumah tangga.</p>',
    ),
    array(
        'title'    => 'Syarat & Alur Pendaftaran Izin Edar PKRT Kemenkes RI',
        'category' => 'Tips Bisnis',
        'content'  => '<h2>Pentingnya Izin Edar PKRT</h2><p>Izin Edar Perbekalan Kesehatan Rumah Tangga (PKRT) menjamin keabsahan dan keamanan produk pembersih Anda saat dijual secara luas di supermarket dan marketplace.</p><h2>Tahapan Pengurusan Berkas & Uji Stabilitas</h2><p>Persiapkan dokumen formula, lembar MSDS bahan, serta sampel uji laboratorium laboratorium terakreditasi.</p>',
    ),
    array(
        'title'    => 'Formulasi Hand Sanitizer Gel & Spray Sesuai Standar WHO',
        'category' => 'Formulasi Produk',
        'content'  => '<h2>Kadar Alkohol Efektif Pembunuh Kuman</h2><p>Formulasi berbasis Alkohol 70% atau Isopropanol 75% terbukti secara klinis melumpuhkan bakteri dan virus secara cepat.</p><h2>Mencegah Kulit Kering dengan Humektan</h2><p>Penambahan Gliserol dan Carbomer membentuk konsistensi gel yang lembut, sejuk, dan tidak lengket di telapak tangan.</p>',
    ),
    array(
        'title'    => 'Tips Memilih Supplier Bahan Baku Kimia Tangan Pertama Terpercaya',
        'category' => 'Tips Bisnis',
        'content'  => '<h2>Kriteria Supplier Kimia Berkualitas</h2><p>Pastikan supplier menyediakan dokumen COA (Certificate of Analysis) dan MSDS lengkap untuk setiap bahan kimia yang Anda beli.</p><h2>Memilih Kemasan Botol Jerigen yang Aman</h2><p>Gunakan kemasan berbahan HDPE atau PET tebal yang tahan terhadap reaksi zat asam maupun basa kuat.</p>',
    ),
    array(
        'title'    => 'Cara Membuat Pelembut Pakaian (Softener) Sekali Bilas Hemat Air',
        'category' => 'Formulasi Produk',
        'content'  => '<h2>Fungsi Kationik Surfaktan dalam Softener</h2><p>Surfaktan kationik menetralkan muatan statis pada serat kain, menjadikan pakaian terasa halus, lembut, dan mudah disetrika.</p><h2>Teknologi Fast-Rinse Sekali Bilas</h2><p>Formulasi sekali bilas menekan konsumsi air pada usaha laundry kiloan secara signifikan tanpa mengurangi keharuman.</p>',
    ),
    array(
        'title'    => 'Formulasi Pembersih Kerak Keramik & Kamar Mandi Tanpa Merusak Nat',
        'category' => 'Formulasi Produk',
        'content'  => '<h2>Perbedaan Asam Organik vs Asam Anorganik</h2><p>Penggunaan asam organik seperti Citric Acid lebih aman untuk permukaan keramik dan nat semen dibandingkan HCL pekat yang korosif.</p><h2>Petunjuk Penggunaan & Alat Pelindung Diri</h2><p>Selalu gunakan sarung tangan karet dan masker saat meracik pembersih kerak konsentrasi tinggi di ruang praktikum.</p>',
    ),
    array(
        'title'    => 'Teknik Pembuatan Karbol Sereh Alami Disinfektan & Pengusir Serangga',
        'category' => 'Edukasi Kimia',
        'content'  => '<h2>Manfaat Minyak Sereh (Citronella Oil)</h2><p>Minyak sereh alami mengandung senyawa citronellal yang ampuh mengusir nyamuk, lalat, dan kecoa sekaligus memberikan aroma segar.</p><h2>Proses Emulsifikasi Minyak dengan Pinus</h2><p>Meracik minyak sereh dengan arpus/pinus olahan menghasilkan karbol wangi yang emulsinya stabil dan tahan disimpan lama.</p>',
    ),
    array(
        'title'    => 'Analisa Peluang Bisnis Laundry & Suplier Chemical Kiloan 2026',
        'category' => 'Tips Bisnis',
        'content'  => '<h2>Prospek Usaha Pembersih Kebutuhan Harian</h2><p>Kebutuhan produk kebersihan laundry dan rumah tangga selalu stabil dalam berbagai kondisi ekonomi karena merupakan kebutuhan pokok harian.</p><h2>Langkah Mengawali Usaha dari Skala Rumahan</h2><p>Mulailah dari pasar terdekat seperti laundry lokal, hotel, dan usaha catering sebelum merambah pasar ritel berskala lebih besar.</p>',
    )
);

$authors = array('Ir. Heru Kurniawan', 'Dr. Endang Sulistyo', 'Budi Santoso, S.Si', 'Tim Redaksi Cleanique Academy');

foreach ($articles as $index => $item) {
    // Check if post exists by title
    $existing = get_page_by_title($item['title'], OBJECT, 'post');
    if (!$existing) {
        $cat_obj = get_category_by_slug(sanitize_title($item['category']));
        if (!$cat_obj) {
            $cat_id = wp_create_category($item['category']);
        } else {
            $cat_id = $cat_obj->term_id;
        }

        $post_id = wp_insert_post(array(
            'post_title'    => $item['title'],
            'post_content'  => $item['content'],
            'post_status'   => 'publish',
            'post_type'     => 'post',
            'post_category' => array($cat_id),
            'post_excerpt'  => wp_strip_all_tags(mb_substr($item['content'], 0, 140)) . '...',
            'post_date'     => date('Y-m-d H:i:s', strtotime('-' . ($index * 2) . ' days')),
        ));

        echo "Created post ID: {$post_id} - {$item['title']}\n";
    } else {
        echo "Already exists: {$item['title']}\n";
    }
}
echo "Finished generating articles.\n";
