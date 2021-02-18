<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index($nama = '')
    {
        $data = [
            'title' => 'HOME | Web Programming'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Contact Me',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jalan-jalan',
                    'kota' => 'Jakarta'

                ], [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jalan Tol',
                    'kota' => 'Jakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }


    //--------------------------------------------------------------------

}
