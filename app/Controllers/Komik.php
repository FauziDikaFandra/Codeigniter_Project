<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel(); // ini bisa di taro juga di BaseController
    }
    public function index()
    {
        //$komik = $this->komikModel->findAll(); sudah pindah ke function di komikModels
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];

        //cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("select * from komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // };

        // $komikModel = new \App\Models\KomikModel(); //atau dengan cara dibawah
        //$komikModel = new KomikModel(); dipindah ke construct
        //$komik = $komikModel->findAll(); tidak pakai ini kalau ke contruct



        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        //echo $slug;
        //$komik = $this->komikModel->getKomik($slug); // pindah ke data
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        return view('komik/detail', $data);
    }


    //--------------------------------------------------------------------

}
