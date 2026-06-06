<?php

namespace Database\Seeders;

use App\Models\Falkutas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class falkutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $falkutas = [
        [
         'name' => "Falkutas Teknik",
         'dekan' => "Prof. Dr. Ir. H. Suyitno, M.T.",
        ],
        [
         'name' => "Falkutas Ekonomi",
         'dekan' => "Prof. Dr. Siti Nurjanah, S.E, M.Si",
        ]
        ];

       Falkutas::fillAndInsert($falkutas);
        }
}

