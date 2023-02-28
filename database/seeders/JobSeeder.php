<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
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
                'date' => '2023-02-03', 'jobType' => 'Part replacement', 'estimatedTime' => 2, 'carPart' => 'Battery'
            ],
            [
                'date' => '2023-02-04', 'jobType' => 'Maintenance', 'estimatedTime' => 1, 'carPart' => ''
            ],
            [
                'date' => '2023-02-05', 'jobType' => 'Repairs', 'estimatedTime' => 2, 'carPart' => ''
            ],
            [
                'date' => '2023-02-06', 'jobType' => 'Part replacement', 'estimatedTime' => 3, 'carPart' => 'Suspension'
            ]
            ];
            DB::table('scheduled_maintenance_jobs')->insert($data);
    }
}
