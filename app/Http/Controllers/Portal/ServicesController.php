<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $stack = ["android.png", "apache.png", "burpsuite.png", "centos.png", "debian.png", "go.png", "laravel.png", "nginx.png", "postgres.png", "ubuntu.png", "vscode.png", "vue.png"];

        $services = [

            ["icon" => "fa-solid fa-chart-line", "title" => "Search Engine Optimization", "description" => "Membuat situs Anda ditemukan dengan lebih mudah serta meningkatkan kesadaran dan keterlibatan dalam berbagai kampanye pemasaran perusahaan."],
            ["icon" => "fa-solid fa-users", "title" => "Social Media Management", "description" => "Anda dapat menciptakan hubungan yang kuat dengan audiens dan meningkatkan keberhasilan kampanye pemasaran digital Anda."],
            ["icon" => "fa-solid fa-shield-halved", "title" => "IT Security", "description" => "Memastikan bahwa platform keamanan berfungsi dengan efektif, serta memberikan pendekatan keamanan yang ampuh untuk mengontrol dan menjamin keamanan sistem Anda"],
            ["icon" => "fa-solid fa-magnifying-glass-location", "title" => "Deep Private Investigation", "description" => "Mengidentifikasi dan menganalisis jejak digital, memberikan bukti yang kuat dalam menyelidiki potensi penyimpangan atau kejahatan yang dapat mengancam stabilitas keamanan"],
            ["icon" => "fa-solid fa-chart-pie", "title" => "Data Analytics", "description" => "Penting bagi perusahaan komersial karena membantu dalam mengumpulkan dan mengidentifikasi informasi krusial untuk strategi bisnis yang efektif."],
            ["icon" => "fa-solid fa-check-to-slot", "title" => "Information System Politics", "description" => "Kemampuan merumuskan strategi kampanye, mengelola isu-isu terkini, dan memberikan dukungan penting dalam pengambilan membantu kandidat menuju kemenangan."],

        ];

        $data = [
            'services' => $services,
            'stacks' => $stack
        ];

        return view('pages.portal.services',  $data);
    }
}
