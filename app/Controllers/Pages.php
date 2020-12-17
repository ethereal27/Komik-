<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $faker = \Faker\Factory::create();
        // dd($faker->name);

        $data = [
            'title' => 'Home | WebProgramminUNPAS'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me '
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl. abc',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl.Setbud',
                    'kota' => 'Bandung'
                ]
            ]

        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
