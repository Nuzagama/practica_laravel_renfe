<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
            'name' => 'Talgo',
            'passengers' => 120,
            'year' => 1992,
            'train_type_id' => 1,
            ],
            [
            'name' => 'Alvia',
            'passengers' => 95,
            'year' => 2001,
            'train_type_id' => 2,
            ],
            [
            'name' => 'AVE',
            'passengers' => 150,
            'year' => 2015,
            'train_type_id' => 3,
            ]
        ]);
    }
}
