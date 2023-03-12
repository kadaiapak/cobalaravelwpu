<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'fullname' => 'Deni Suardi',
            'username' => 'denisuardi',
            'email' => 'denisuardi20@gmail.com',
            'password' => bcrypt('111')
        ]);

        User::create([
            'fullname' => 'Fakhrur Razi',
            'username' => 'fakhrurrazi',
            'email' => 'fakhrurrazi@gmail.com',
            'password' => bcrypt('111')
        ]);

        User::create([
            'fullname' => 'Rizki Nanda Putri',
            'username' => 'rizkinandaputri',
            'email' => 'uti@gmail.com',
            'password' => bcrypt('111')
        ]);

        User::create([
            'fullname' => 'Rafki Aulia',
            'username' => 'rafkiaulia',
            'email' => 'rafkiaulia33@gmail.com',
            'password' => bcrypt('111')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga',
        ]);

        Category::create([
            'name' => 'Internasional',
            'slug' => 'internasional',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae. Id voluptatum ipsum accusamus porro, ad vero, nostrum rerum recusandae qui omnis ullam assumenda, modi placeat repellendus quos dolore voluptatibus nemo deserunt commodi asperiores voluptates.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae. Id voluptatum ipsum accusamus porro, ad vero, nostrum rerum recusandae qui omnis ullam assumenda, modi placeat repellendus quos dolore voluptatibus nemo deserunt commodi asperiores voluptates. Et, quae. Animi consequuntur ipsa, minus officia nihil eos nisi veritatis sunt rem blanditiis, cum vero aliquid nulla saepe porro aspernatur quia suscipit! Officiis rem aut autem ut fugiat, molestias quidem expedita iusto, quas ducimus eius nam animi velit exercitationem molestiae dicta perspiciatis, maiores aliquid.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae. Id voluptatum ipsum accusamus porro, ad vero, nostrum rerum recusandae qui omnis ullam assumenda, modi placeat repellendus quos dolore voluptatibus nemo deserunt commodi asperiores voluptates. Et, quae. Animi consequuntur ipsa, minus officia nihil eos nisi veritatis sunt rem blanditiis, cum vero aliquid nulla saepe porro aspernatur quia suscipit! Officiis rem aut autem ut fugiat, molestias quidem expedita iusto, quas ducimus eius nam animi velit exercitationem molestiae dicta perspiciatis, maiores aliquid.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae. Id voluptatum ipsum accusamus porro, ad vero, nostrum rerum recusandae qui omnis ullam assumenda, modi placeat repellendus quos dolore voluptatibus nemo deserunt commodi asperiores voluptates.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae. Id voluptatum ipsum accusamus porro, ad vero, nostrum rerum recusandae qui omnis ullam assumenda, modi placeat repellendus quos dolore voluptatibus nemo deserunt commodi asperiores voluptates. Et, quae. Animi consequuntur ipsa, minus officia nihil eos nisi veritatis sunt rem blanditiis, cum vero aliquid nulla saepe porro aspernatur quia suscipit! Officiis rem aut autem ut fugiat, molestias quidem expedita iusto, quas ducimus eius nam animi velit exercitationem molestiae dicta perspiciatis, maiores aliquid.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae. Id voluptatum ipsum accusamus porro, ad vero, nostrum rerum recusandae qui omnis ullam assumenda, modi placeat repellendus quos dolore voluptatibus nemo deserunt commodi asperiores voluptates. Et, quae. Animi consequuntur ipsa, minus officia nihil eos nisi veritatis sunt rem blanditiis, cum vero aliquid nulla saepe porro aspernatur quia suscipit! Officiis rem aut autem ut fugiat, molestias quidem expedita iusto, quas ducimus eius nam animi velit exercitationem molestiae dicta perspiciatis, maiores aliquid.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequatur in, quam soluta laboriosam praesentium sit eveniet esse molestias voluptas reprehenderit deserunt recusandae illum officiis optio saepe rerum, omnis repudiandae. Id voluptatum ipsum accusamus porro, ad vero, nostrum rerum recusandae qui omnis ullam assumenda, modi placeat repellendus quos dolore voluptatibus nemo deserunt commodi asperiores voluptates. Et, quae. Animi consequuntur ipsa, minus officia nihil eos nisi veritatis sunt rem blanditiis, cum vero aliquid nulla saepe porro aspernatur quia suscipit! Officiis rem aut autem ut fugiat, molestias quidem expedita iusto, quas ducimus eius nam animi velit exercitationem molestiae dicta perspiciatis, maiores aliquid.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => "Jung Myung Seok, Predator Pemimpin Sekte Berkedok 'Juru Selamat'",
            'slug' => 'jung-myung-seok-predator-pemimpin-sekte-berkedok-juru-selamat',
            'excerpt' => "Beberapa sekte di Korea Selatan menjadi sorotan usai diangkat dalam film dokumenter berjudul 'In the Name of God: A Holy Betrayal'. Salah satunya yakni sekte Providence yang pemimpinnya merupakan predator. Sang pemimpin memakai kedok 'Tuhan' untuk melecehkan korban-korbannya.",
            'body' => "<p>Beberapa sekte di Korea Selatan menjadi sorotan usai diangkat dalam film dokumenter berjudul 'In the Name of God: A Holy Betrayal'. Salah satunya yakni sekte Providence yang pemimpinnya merupakan predator. Sang pemimpin memakai kedok 'Tuhan' untuk melecehkan korban-korbannya.</p>
            <p>Dilansir ABC Australia, Providence merupakan kelompok agama atau sekte yang didirikan pada tahun 1978 di Korea Selatan oleh Jeong Myeong-seok.</p>
            <p>Jeong Myeong-seok mengaku dirinya sebagai Mesias atau seorang juru selamat. Terkadang, dia juga menyebut dirinya sebagai Pendeta Joshua. Ia juga mantan pengikut Gereja Unifikasi mendiang Sun Myung Moon.</p>
            <p>Sekte ini juga menggunakan nama lain seperti Jesus Morning Star (JMS, ini juga merupakan inisial Jeong Myeing-seok), Christian Gospel Mission dan The Bright Moon Church.</p>",
            'category_id' => 3,
            'user_id' => 2
        ]);
        
        Post::create([
            'title' => "Arab Saudi dan Iran Kembali Baikan Usai 7 Tahun Putus Hubungan",
            'slug' => 'arab-saudi-dan-iran-kembali-baikan-usai-7-tahun-putus-hubungan',
            'excerpt' => "Arab Saudi dan Iran sepakat untuk memulihkan hubungan diplomatik. Dua negara ini berbaikan usai putus hubungan sekitar 7 tahun.",
            'body' => "<p>Arab Saudi dan Iran sepakat untuk memulihkan hubungan diplomatik. Dua negara ini berbaikan usai putus hubungan sekitar 7 tahun.</p>
            <p>Tanda-tanda keduanya akan memperbaiki hubungan sebenarnya terlihat sejak tahun lalu. Dilansir AFP, Menteri Luar Negeri Iran Hossein Amir-Abdollahian berharap bisa mengembalikan hubungan diplomatik antara Iran dengan Arab Saudi.</p>
            <p>Arab Saudi diketahui memutuskan hubungan dengan Iran pada Januari 2016. Kondisi itu terjadi usai pengunjuk rasa menyerang Kedutaan Arab Saudi di Teheran dan Konsulat di Masyhad. Pengunjuk rasa di Iran menyampaikan protes terhadap kebijakan eksekusi Ulama Syiah Nimr Al-Nimr di Saudi.</p>",
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Ucapan Selamat Pemimpin Dunia untuk Periode Ketiga Xi Jinping Pimpin China",
            'slug' => 'ucapan-selamat-pemimpin-dunia-untuk-periode-ketiga-xi-jinping-pimpin-china',
            'excerpt' => "Xi Jinping resmi menjadi Presiden China untuk periode ketiga. Ucapan selamat pun datang dari para pemimpin dunia.",
            'body' => "<p>Xi Jinping resmi menjadi Presiden China untuk periode ketiga. Ucapan selamat pun datang dari para pemimpin dunia.</p>
            <p>Dilansir AFP dan Channel News Asia, Jumat (10/3/2023), Xi Jinping dipilih secara bulan oleh nyaris 3.000 anggota parlemen China atau yang disebut Kongres Rakyat Nasional (NPC). Tidak ada kandidat lain dalam pemilihan itu.</p>",
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Final BNI Sirnas Purwokerto: Revans Sukses Jolin Angelia",
            'slug' => "final-bni-sirnas-purwokerto-revans-sukses-jolin-angelia",
            'excerpt' => "Jolin Angelia mengalahkan Kavitha Nadjwa Aulia untuk meraih juara di BNI Sirkuit Nasional (Sirnas) A Jawa Tengah 2023 di Purwokerto. Ia sukses revans atas hasil di Bandung.",
            'body' => "<p>Jolin Angelia mengalahkan Kavitha Nadjwa Aulia untuk meraih juara di BNI Sirkuit Nasional (Sirnas) A Jawa Tengah 2023 di Purwokerto. Ia sukses revans atas hasil di Bandung.</p>
            <p>Jolin Angelia menjadi juara di kategori Tunggal Remaja Putri pada ajang BNI Sirnas A Purwokerto. Jolin meraih podium pertama usai mengalahkan unggulan pertama Kavitha Nadjwa Aulia pada laga final yang berlangsung di GOR Satria Purwokerto</p>
            <p>Jolin menang usai menjalani laga sengit selama 54 menit. Sempat kehilangan gim pertama dengan 13-21, ia bangkit di dua gim berikutnya dengan menang 21-16 dan 21-15.</p>
            <p>Remaja asal Medan ini mampu membalas kekalahannya atas Revitha di final BNI Sirnas A Jawa Barat 2023 di Bandung, yang menjadi seri pertama BNI Sirnas 2023. Jolin kala itu kalah juga lewat laga ketat 21-18, 15-21, dan 19-21.
            </p>
            <p>Kekalahan menyakitkan di Bandung jadi pelajaran untuk Jolin. Kala di Bandung, ia kalah akibat tak tenang di poin-poin krusial. Sementara di Purwokerto, ia tampil tenang untuk bisa keluar dari tekanan.</p>
            <p>\"Sudah saling mengenal karena sebelumnya sudah saling bertemu. Evaluasi dari pertemuan sebelumnya mungkin di poin-poin akhir,\" ujar Jolin selepas laga kepada detikSport.</p>
            <p>\"Sebelumnya kurang megang sering mati. Padahal sudah poin akhir tinggal end gitu. Pada laga tadi di poin-poin akhir mencoba nothing to lose aja. Sebelumnya kan dia juga menang jadi tidak bebanlah,\" ungkapnya.</p>
            <p>Sukses membalas kekalahan dari Kavitha menambah kepercayaan diri Jolin untuk Sirnas selanjutnya. Apalagi, Kavitha merupakan unggulan pertama.</p>
            <p>Meski demikian, hal ini tak serta merta membuat Jolin menaikkan target di seri selanjutnya. Ia tetap mengusung target lolos ke semifinal seperti target awalnya di Purwokerto.</p>
            <p>\"Pastinya meningkatkan rasa percaya diri. Mau mengalahkan yang lain juga tidak hanya dia. Lawan dia lebih nothing to lose karena dia unggulan,\" tambah Jolin soal kemenangannya atas Kavitha.</p>
            <p>\"Awalnya target masuk empat besar, ini sudah overtarget. Targetnya tapi nanti tetap empat besar dulu nanti baru ke selanjutnya.\"</p>
            <p>BNI Sirnas A Jateng 2023 adalah seri ketiga dari gelaran BNI Sirnas 2023, yang turut menjadi tolak ukur pembinaan bulutangkis nasional sekaligus ajang buat para atlet dalam menjaring poin nasional dan pematangan atlet-atlet muda potensial. Lewat BNI Sirnas 2023, para pebulutangkis muda Indonesia akan mengerahkan kemampuan terbaiknya dalam usaha merintis jalan ke pelatnas PBSI sekaligus menjadi pemain top andalan Merah Putih di masa depan.</p>
            <p>Ajang pencarian bibit muda bulutangkis ini didukung penuh oleh BNI. Sebagai salah bentuk komitmen untuk mempromosikan dan mempopulerkan BNI Sirkuit Nasional 2023, PP PBSI secara resmi juga bekerjasama dengan detikcom dan CNN Indonesia sebagai official media and broadcasting partner di semua serinya.</p>",
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => "5 React useState Mistakes That Will Get You Fired",
            'slug' => '5-react-usestate-mistakes-that-will-get-you-fired',
            'excerpt' => "5 Common React useState mistakes and how to avoid them",
            'body' => "<p>While useStateis a simple tool to use, many developers still make mistakes with it. During code reviews, I often see these mistakes made even by experienced people.</p>
            <p>When using setState, you can access the previous state as an argument of callback. Not using it can cause unexpected state updates. We are going to take apart that mistake with a typical Counter example.</p>
            <p>Let’s go through that example. It is really simple, but let’s assume that we are going to have a much more complex app soon. So component hierarchy will be really deep and the user state will be used all over the app. In that case, we should separate our state into the global scope, so it can be easily accessed from any point of the app (and we don’t have to pass props 20–40 levels down).</p>",
            'category_id' => 1,
            'user_id' => 3
        ]);

        Post::create([
            'title' => "Say bye bye to bad javascript practices",
            'slug' => "say-bye-bye-to-bad-javascript-practices",
            'excerpt' => "When we take our first steps into the wonderful world of programming, we get to see for ourselves what it does for millions of people. It’s thanks to programming that the lives of so many are made easier, just by pressing a few keys on their devices (This is magic).",
            'body' => "<p>When we take our first steps into the wonderful world of programming, we get to see for ourselves what it does for millions of people. It’s thanks to programming that the lives of so many are made easier, just by pressing a few keys on their devices (This is magic).</p>
            <p>Programming is another kind of superpower, but as Uncle Ben said to his nephew, Peter Parker, “With great power comes great responsibility.” In the world of programming, our greatest responsibility is to ensure that the code we write is both easily testable and will remain maintainable over time.</p>
            <p>There are some small practices in programming that can have a continuously negative impact on the code we write and the product we create as the end result. I’ve experienced these issues firsthand. It’s important to share what they are and why you should avoid them at all costs.</p>",
            'category_id' => 1,
            'user_id' => 1
        ]);
        
    }
}
