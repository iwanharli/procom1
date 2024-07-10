<?php

namespace Database\Seeders;

use App\Models\App;
use App\Models\Redaction;
use App\Models\Guideline;
use App\Models\Disclaimer;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class WebInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App::create([
            'name' => 'Procom',
            'logo' => 'logos/app1.png',
            'favicon' => 'favicons/app1.ico',
            'title' => 'First Application',
            'description' => 'This is the first application.',
            'link_web' => 'https://procom.com',
        ]);

        Redaction::create([
            'redaction_content' => '
            <p>
                Dikelola oleh : <b> OaseData </b> <br/><br/>

                <b>Pimpinan Umum </b>: Harli <br/><br/>

                <b> Pimpinan Redaksi </b> : Harli <br/>
                <b> Sekretaris Redaksi </b> : T. Hisyam <br/>
                <b> Redaktur Pelaksana </b> : – <br/>
                <b> Redaktur </b> : T. Hisyam, <br/>
                <b> Staf Redaksi </b> : <br/><br/>

                <b> Penulis Konten </b> : <br/><br/>

                <b> Ass. Pimpinan Perusahaan </b> : T. Hisyam <br/>
                <b> Keuangan </b> : Muhafid <br/>
                <b> Iklan </b> : <br/><br/>

                <b> WebMaster </b> : OaseData.com
            <p>'
        ]);

        Guideline::create([
            'guideline_content' => '
            <p>
                PERATURAN DEWAN PERS 
            <p>'
        ]);

        Disclaimer::create([
            'disclaimer_content' => '
            <p>
                Disclaimer 
            <p>'
        ]);

        Contact::create([
            'contact_content' => '
            <p>
                Kontak 
            <p>'
        ]);
    }
}
