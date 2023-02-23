<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Latihan;

class LatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Latihan::Create([
            'name' => 'Push Up',
            'banyak' => '52'
        ]);

        Latihan::Create([
            'name' => 'Push Up',
            'banyak' => '20'
        ]);
    }
}
