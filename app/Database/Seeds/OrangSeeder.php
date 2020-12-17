<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Stella Alithea',
                'alamat'    => 'Wasuponda',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama'      => 'Irene Maritsa',
                'alamat'    => 'Pomala',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama'      => 'Lopinta Sarungallo',
                'alamat'    => 'Toraja',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama'      => 'Anu',
                'alamat'    => 'Pomala',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama'      => 'Anuanu',
                'alamat'    => 'Pomala',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama'      => 'Anuanuanu',
                'alamat'    => 'Toraja',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]

        ];

        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );

        // Using Query Builder
        // $this->db->table('orang')->insert($data);
        $this->db->table('orang')->insertBatch($data);
    }
}
