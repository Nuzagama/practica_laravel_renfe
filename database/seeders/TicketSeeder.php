<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
            'date' => now(),
            'price' => 25,
            'train_id' => 1,
            'ticket_type_id' => 1,
            ],
            [
            'date' => now(),
            'price' => 60,
            'train_id' => 2,
            'ticket_type_id' => 2,
            ],
            [
            'date' => now(),
            'price' => 80,
            'train_id' => 3,
            'ticket_type_id' => 3,
            ]
        ]); 
    }
}
