<?php

namespace Database\Seeders;

use App\Models\Falkutas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
              
                'nama_prodi' => "Teknik Informatika",
                'nama_kaprodi' => "Dr. Ir. H. Suyitno, M.T."
              
            ],
            [
               
                'nama_prodi' => "Teknik Mesin",
                'nama_kaprodi' => "Dr. Ir. H. Suyitno, M.T."
               
            ],
            [
               
                'nama_prodi' => "Akuntansi",
                'nama_kaprodi' => "Prof. Dr. Siti Nurjanah, S.E, M.Si"
               
            ],
            [
               
                'nama_prodi' => "Manajemen",
                'nama_kaprodi' => "Prof. Dr. Siti Nurjanah, S.E, M.Si"
             
            ]
        ];

        foreach ($prodis as $prodi) {
            $falkutasId = Falkutas::inRandomOrder()->first()->id;
            $prodi['falkutas_id'] = $falkutasId;
            \App\Models\Prodi::create($prodi);
        }
    }
}
