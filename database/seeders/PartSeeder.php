<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'partType' => 'Battery', 'price' => 1500
            ],
            [
                'partType' => 'Wheels', 'price' => 800
            ],
            [
                'partType' => 'Suspension', 'price' => 2500
            ],
            [
                'partType' => 'Brake discs', 'price' => 500
            ]
            ];
        DB::table('spare_parts')->insert($data);
    }
}
