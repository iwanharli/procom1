<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $client_files = [
            "bri.png", "cimb.png", "densus.png", "depkominfo.png", "fiduciary.png",
            "infocon.png", "intel.png", "jokowibasuki.png", "jokowijk.png",
            "kominfo.png", "mandiri.png", "mega.png", "pengayoman.png", "sgu.png", "sthana.png",
            "stsn.png", "tutwuri.png", "waskita.png", "yudisial.png"
        ];

        $data = [
            'client_files' => $client_files,
            // content 1
            'about_h1' => "We provide solutions for your creative ideas",
            'about_p1' => "PT. Inti Shine Utama merupakan sebuah Perusahaan yang
            bergerak pada bidang teknologi, informasi dan riset publik,
            PT. Inti Shine Utama bukan hanya berorientasi pada penyajian
            referensi pengetahuan berbasis data analitik untuk upaya
            pengembangan, percepatan, efektivitas dan inovasi",
            // content 2
            'about_h2' => "We craft marketing and digital products that grow business",
            'about_p2' => "Kami didukung oleh banyak tenaga akademisi, professional, praktisi
            serta mantan aktivis – aktivis mahasiswa dengan berbagai
            macam kompetensi berdasarkan bidang nya masing – masing.<br/><br/>
            Selain itu juga kami memiliki pengalaman yang sudah teruji
            terkait penggunaan Open Source Intelligence (OSINT) untuk
            beberapa pekerjaan yang membutuhkan layanan tersebut.
            OSINT merupakan kemampuan dan pengetahuan yang
            diperlukan untuk mengumpulkan, menganalisis, dan
            menggunakan informasi dari sumber terbuka untuk berbagai
            tujuan.",
        ];

        return view('pages.portal.about', $data);
    }
}
