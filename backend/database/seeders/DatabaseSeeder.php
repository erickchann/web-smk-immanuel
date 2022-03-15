<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Event;
use App\Models\News;
use App\Models\Place;
use App\Models\RequestedEvent;
use App\Models\Tbkelas;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // create admin
        Admin::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        // create class
        Tbkelas::create([
            'nama_kelas' => 'X TKJ 1',
            'idguru' => 'FB',
            'idjurusan' => 1,
            'tingkat' => 10,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'X TKJ 2',
            'idguru' => 'DS',
            'idjurusan' => 1,
            'tingkat' => 10,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'X TKJ 3',
            'idguru' => '',
            'idjurusan' => 1,
            'tingkat' => 10,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'X AKL 1',
            'idguru' => 'MR',
            'idjurusan' => 2,
            'tingkat' => 10,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'X AKL 2',
            'idguru' => '',
            'idjurusan' => 2,
            'tingkat' => 10,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'X BDP',
            'idguru' => 'DH',
            'idjurusan' => 3,
            'tingkat' => 10,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XI TKJ 1',
            'idguru' => 'SF',
            'idjurusan' => 1,
            'tingkat' => 11,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XI TKJ 2',
            'idguru' => 'SE',
            'idjurusan' => 1,
            'tingkat' => 11,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XI TKJ 3',
            'idguru' => 'SN',
            'idjurusan' => 1,
            'tingkat' => 11,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XI AKL 1',
            'idguru' => 'VA',
            'idjurusan' => 2,
            'tingkat' => 11,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XI AKL 2',
            'idguru' => 'SP',
            'idjurusan' => 2,
            'tingkat' => 11,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XI BDP',
            'idguru' => 'FA',
            'idjurusan' => 3,
            'tingkat' => 11,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XII TKJ 1',
            'idguru' => 'BS',
            'idjurusan' => 1,
            'tingkat' => 12,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XII TKJ 2',
            'idguru' => 'SY',
            'idjurusan' => 1,
            'tingkat' => 12,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XII TKJ 3',
            'idguru' => 'AR',
            'idjurusan' => 1,
            'tingkat' => 12,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XII AKL 1',
            'idguru' => 'EM',
            'idjurusan' => 2,
            'tingkat' => 12,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XII AKL 2',
            'idguru' => 'NV',
            'idjurusan' => 2,
            'tingkat' => 12,
            'template_ledger' => ''
        ]);

        Tbkelas::create([
            'nama_kelas' => 'XII BDP',
            'idguru' => 'YV',
            'idjurusan' => 3,
            'tingkat' => 12,
            'template_ledger' => ''
        ]);


        // create user
        User::create([
            'name' => 'User Test 1',
            'nis' => '1000',
            'username' => 'user.1000@ski.sch.id',
            'password' => bcrypt('1000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 13
        ]);

        User::create([
            'name' => 'User Test 2',
            'nis' => '2000',
            'username' => 'user.2000@ski.sch.id',
            'password' => bcrypt('2000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 14
        ]);

        User::create([
            'name' => 'User Test 3',
            'nis' => '3000',
            'username' => 'user.3000@ski.sch.id',
            'password' => bcrypt('3000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 15
        ]);

        User::create([
            'name' => 'User Test 4',
            'nis' => '4000',
            'username' => 'user.4000@ski.sch.id',
            'password' => bcrypt('4000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 16
        ]);

        User::create([
            'name' => 'User Test 5',
            'nis' => '5000',
            'username' => 'user.5000@ski.sch.id',
            'password' => bcrypt('5000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 17
        ]);

        User::create([
            'name' => 'User Test 6',
            'nis' => '6000',
            'username' => 'user.6000@ski.sch.id',
            'password' => bcrypt('6000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 18
        ]);

        User::create([
            'name' => 'User Test 7',
            'nis' => '7000',
            'username' => 'user.7000@ski.sch.id',
            'password' => bcrypt('7000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 13
        ]);

        User::create([
            'name' => 'User Test 8',
            'nis' => '8000',
            'username' => 'user.8000@ski.sch.id',
            'password' => bcrypt('8000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 13
        ]);

        User::create([
            'name' => 'User Test 9',
            'nis' => '9000',
            'username' => 'user.9000@ski.sch.id',
            'password' => bcrypt('9000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 14
        ]);

        User::create([
            'name' => 'User Test 10',
            'nis' => '10000',
            'username' => 'user.10000@ski.sch.id',
            'password' => bcrypt('10000'),
            'tingkat' => 12,
            'role' => 'siswa',
            'kelas_id' => 14
        ]);

        
        // Create Prestasi
        Achievement::create([
            'title' => 'Prestasi Siswa/i SMK Kristen Immanuel Pontianak pada “KUIS KIHAJAR 2019” tingkat Provinsi',
            'content' => 'Selamat kepada Mina Amelia yang berhasil meraih Juara 3 dalam lomba “Kuis Kihajar Tingkat Nasional jenjang SMK/MAK”. Kuis ini bertujuan untuk menumbuhkembangkan budaya belajar serta menghasilkan karya inovatif siswa Indonesia dengan memanfaatkan Teknologi.',
            'author' => 'Admin',
            'image_url' => 'images/60ec24fsaf34gssfd.jpg',
            'tag' => 'Prestasi',
            'date' => 'November 17, 2019'
        ]);

        Achievement::create([
            'title' => 'Prestasi Siswa SMK, Hengki Sanjaya dan Luki Centuri dalam World Skill Kazan 2019',
            'content' => 'Selamat kepada Hengki Sanjaya yang telah mewakili INDONESIA meraih Silver Medal di World Skill Kazan 2019 untuk IT Software Solution for Business. Dari pengumuman hasil World Skill di bidang ini terlihat Jia-He Tu (Taipei) meraih emas dengan 754 poin, Hengki Sanjaya (Indonesia) meraih perak dengan 751 poin, dan Mahyar Jabari (Iran) meraih perunggu dengan 742 poin. Tidak hanya itu, Luki Centuri juga telah mewakili Indonesia dalam World Skill Kazan 2019 untuk kategori Web Technologies dan mendapatkan Medallion Of Excellence.
            
            Hengki dan Luki sudah membesarkan nama SMK Kristen Immanuel dan bahkan Indonesia ke mata dunia internasional, dan membuktikan SMK Kristen Immanuel bisa memberikan fasilitas untuk mengembangkan diri ke tingkat internasional.',
            'author' => 'Admin',
            'image_url' => 'images/60ec3d6f5dadf23rg3f.jpg',
            'tag' => 'Prestasi',
            'date' => 'August 28, 2019'
        ]);
        

        // Create Headline News
        News::create([
            'title' => 'Vaksinasi ke-2 Siswa kelas 12 SMK Immanuel Pontianak',
            'content' => 'Semua karna anugerah Tuhan sehingga siswa kelas 12 SMK Kristen Immanuel Pontianak sudah divaksin ke-2.
           
Berikutnya vaksinasi untuk kelas 10 dan 11 pada tanggal 16 September 2021.',
            'author' => 'Admin',
            'image_url' => 'images/60ec3d14fdff5dab45h30f.jpg',
            'tag' => 'Berita',
            'date' => 'September 9, 2021',
            'headline' => 'y'
        ]);
        
        // Create News
        News::create([
            'title' => 'Pelatihan IHT Kepada guru-guru SMK Immanuel Pontianak',
            'content' => 'Guru-guru SMK Kristen Immanuel Pontianak telah mengikuti pelatihan IHT (In House Training) untuk Kurikulum SMK Pusat Keunggulan yang dilakukan pada tanggal 3-13 Agustus 2021.',
            'author' => 'Admin',
            'image_url' => 'images/60ec3d14g3iofqef.jpg',
            'tag' => 'Berita',
            'date' => 'August 14, 2021'
        ]);

        // Create News
        News::create([
            'title' => 'Penerimaan Siswa Baru SMK Immanuel Pontianak',
            'content' => 'Pendaftaran Siswa Baru untuk tahun ajaran 2021/2022 SMK Kristen Immanuel Pontianak akan dibuka tanggal 1 Maret 2021.
Dengan 3 jurusan:
Akuntansi Keuangan dan Lembaga (AKL)
Bisnis Daring Pemasaran (BDP)
Teknik Komputer dan Jaringan (TKJ)
Ayo segera bergabung bersama kami.
            
            Nomor Contact SMK (bisa via whatsapp): 089524435865',
            'author' => 'Admin',
            'image_url' => 'images/60ec3d2db7e6c130133.jpg',
            'tag' => 'Berita',
            'date' => 'February 27, 2021'
        ]); 

        // Create News
        News::create([
            'title' => 'HUT ke-33 SMK Immanuel Pontianak',
            'content' => 'Anugerah Tuhan ditengah Pandemi itulah tema ultah SMK Kristen Immanuel Pontianak ke 33 tanggal 5 Februari 2021, dan kado ultah dari Tuhan adalah SMK IMMANUEL dipercaya Direktorat untuk dikembangkan menjadi SMK PUSAT KEUNGGULAN (Center of Excellence ) Sektor Hospitality. Segala kemuliaan hanya bagi Tuhan.',
            'author' => 'Admin',
            'image_url' => 'images/60ec29aja9fh2fna23s.jpg',
            'tag' => 'Berita',
            'date' => 'February 7, 2021'
        ]); 

        Category::create([
            'category' => 'Akuntansi'
        ]);

        Category::create([
            'category' => 'Coding'
        ]);

        Category::create([
            'category' => 'Pemasaran'
        ]);

        Place::create([
            'place' => 'Gedung Lama'
        ]);

        Place::create([
            'place' => 'Gedung Baru'
        ]);

        Place::create([
            'place' => 'Co Working'
        ]);

        Event::create([
            'name'=>'Belajar Angular Bersama',
            'user_id'=>1,
            'admin_id'=>1,
            'category_id'=>1,
            'place_id'=>1,
            'image'=>'gada image',
            'description'=>'Belajar frame work angular js bersama sama',
            'time'=>'2022-03-15 07:16:46.000000'
        ]);

        RequestedEvent::create([
            'name'=>'Belajar Angular Bersama',
            'user_id'=>1,
            'category_id'=>1,
            'place_id'=>1,
            'image'=>'gada image',
            'description'=>'Belajar frame work angular js bersama sama',
            'status'=>'P',
            'time'=>'2022-03-15 07:16:46.000000'
        ]);
    }
}
