<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $qa = [
            [
                'title' => "Tentang Perusahaan",
                "content" => [
                    [
                        'q' => "Apa itu PT. Inti Shine Utama?",
                        'a' => "PT. Inti Shine Utama adalah perusahaan yang bergerak di bidang teknologi, informasi, dan riset publik.",
                    ],
                    [
                        'q' => "Apa fokus utama dari PT. Inti Shine Utama?",
                        'a' => "Fokus utama PT. Inti Shine Utama adalah menyajikan referensi pengetahuan berbasis data analitik untuk pengembangan, percepatan, efektivitas, dan inovasi teknologi informasi yang dibutuhkan untuk optimalisasi kebijakan dan pelayanan publik.",
                    ],
                    [
                        'q' => "Siapa saja yang mendukung PT. Inti Shine Utama dalam menjalankan aktivitasnya?",
                        'a' => "PT. Inti Shine Utama didukung oleh banyak tenaga akademisi, profesional, praktisi, serta mantan aktivis mahasiswa dengan berbagai macam kompetensi berdasarkan bidangnya masing-masing.",
                    ],
                ]
            ],

            [
                'title' => "Tentang OSINT",
                "content" => [
                    [
                        'q' => "Apa itu Open Source Intelligence (OSINT)?",
                        'a' => "OSINT adalah kemampuan dan pengetahuan yang diperlukan untuk mengumpulkan, menganalisis, dan menggunakan informasi dari sumber terbuka untuk berbagai tujuan, seperti intelijen, keamanan, dan penegakan hukum.",
                    ],
                    [
                        'q' => "Di bidang apa saja keterampilan OSINT dapat diterapkan?",
                        'a' => "Keterampilan OSINT dapat diterapkan di bidang intelijen, keamanan, penegakan hukum, dan bidang lain di mana akses terhadap informasi penting diperlukan.",
                    ],
                    [
                        'q' => "Apakah PT. Inti Shine Utama memiliki pengalaman dalam penggunaan Open Source Intelligence (OSINT)?",
                        'a' => "Ya, PT. Inti Shine Utama memiliki pengalaman yang sudah teruji terkait penggunaan Open Source Intelligence (OSINT) untuk beberapa pekerjaan yang membutuhkan layanan tersebut.",
                    ],
                ]
            ],

            [
                'title' => "Aktivitas & Layanan",
                "content" => [
                    [
                        'q' => "Apa itu Search Engine Optimization?",
                        'a' => " Search Engine Optimization merupakan sebuah
                        praktik optimisasi guna meningkatkan visibilitas dan
                        posisi sebuah website di dalam mesin pencarian
                        (search engine). Dengan itu pelanggan dan para
                        prospek bisa menemukan situs dengan lebih mudah.",
                    ],
                    [
                        'q' => "Apa Saja Service yang terkait Search Engine Optimization?",
                        'a' => "Berikut merupakan beberapa Service yang kami miliki
                        terkait Search Engine Optimization : SEO Consulting, Keyword Discovery, Online Reputation
                        Management, Ads Management, Backlinks Managemen.",
                    ],
                    // ***********
                    [
                        'q' => "Apa itu Social Media Management?",
                        'a' => " Social Media Management adalah proses untuk mengelola
                        dan mengoptimalkan keberadaan online sebuah
                        bisnis atau individu di platform-platform media
                        sosial. Proses ini melibatkan kegiatan yang dirancang
                        untuk membangun, memelihara, dan memperluas
                        audiens serta pengaruh online.",
                    ],
                    [
                        'q' => "Apa Saja Service yang terkait  Social Media Management?",
                        'a' => " Berikut merupakan beberapa Service yang kami miliki
                        terkait Social Media Management : Social Media Consulting, Official Media Campaign, Social Media Campaign, Media Online Campaign, Key Opinion Leader (KOL), Media Monitoring System (MMS).",
                    ],
                    // ***********
                    [
                        'q' => "Apa itu IT Security?",
                        'a' => " IT Security adalah proses untuk mengelola
                        dan mengoptimalkan keberadaan online sebuah
                        bisnis atau individu di platform-platform media
                        sosial. Proses ini melibatkan kegiatan yang dirancang
                        untuk membangun, memelihara, dan memperluas
                        audiens serta pengaruh online.",
                    ],
                    [
                        'q' => "Apa Saja Service yang terkait  IT Security?",
                        'a' => " Berikut merupakan beberapa Service yang kami miliki
                        terkait IT Security :  Penetration Testing (Pentest), Security Operations and Monitoring, Security Analytics, Insider Threat, DDoS.",
                    ],
                    // ***********
                    [
                        'q' => "Apa itu Deep Private Investigation?",
                        'a' => "Deep Private Investigation ini merupakan
                        sebuah strategi penyelidikan menggunakan
                        teknik OSINT (Open Source Intelligence) dan
                        penemuan akun dan  konten media sosial pada
                        sebuah perangkat digital, untuk kemudian data – data yang sudah dihapus pun akan ditemukan
                        kembali sebagai jejak digital, sekaligus menjadi
                        bukti apabila terjadi penyimpangan ataupun
                        tindak kejahatan yang berpotensi akan
                        mengancam dan mengganggu stabilitas
                        keamanan Nasional",
                    ],
                    // ***********
                    [
                        'q' => "Apa itu Data Analytics?",
                        'a' => "Data Analytics merupakan salah satu kegiatan dalam
                        menganalisis data yang masih mentah dan diproses dengan
                        cara-cara tertentu sehingga menjadi kesimpulan yang bisa
                        dijadikan referensi untuk pengambilan keputusan. Data
                        analytics sendiri pada penerapannya memiliki banyak proses
                        dan teknik",
                    ],
                    [
                        'q' => "Apa Saja Service yang terkait  Data Analytics?",
                        'a' => " Berikut merupakan beberapa Service yang kami miliki
                        terkait Data Analytics : Global Issue Analytics, National Issue Analytics, Political Analytics, Market Analytics, Communication Analytic.",
                    ],
                    // ***********
                    [
                        'q' => "Apa itu Controlling Election And Monitoring System?",
                        'a' => " Software yang memiliki fungsi untuk melakukan
                        monitoring serta mengontrol peta kekuatan kandidat atau
                        partai politik, serta mampu untuk memprediksi hasil
                        pemilu berdasarkan variabel - variabel tertentu. Output
                        dari Controlling Election And Monitoring System ini dapat
                        digunakan untuk merumuskan strategi kampanye,
                        mengolah isu, dan melakukan penetrasi sebagai bagian
                        dari decision support system bagi kandidat dalam tujuan
                        untuk pemenangan",
                    ],
                    [
                        'q' => "Apa Saja Service yang terkait  Controlling Election And Monitoring System?",
                        'a' => " Berikut merupakan beberapa Service yang kami miliki
                        terkait Controlling Election And Monitoring System : Candidate Electability Data, Candidate Popularity Data, Swing Voters Data, Consistent Voters Data, In-Consistent Voters Data, Key Person Data, Region Issue Data, Power Map Candidate Data.",
                    ],
                ]
            ],
        ];

        $data = [
            'qa' => $qa
        ];
        return view('pages.portal.faqs', $data);
    }
}
