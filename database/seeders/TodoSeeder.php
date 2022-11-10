<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'item' => "Breakfast",
        ]);

        DB::table('todos')->insert([
            'item' => "Lunch",
        ]);

        DB::table('todos')->insert([
            'item' => "Dinner",
        ]);
    }
}
