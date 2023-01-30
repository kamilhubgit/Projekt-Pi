<?php

namespace Database\Seeders;

use http\Env\Response;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<50;$i++){
            DB::table('people')->insert([
                'imie'=>Str::random(10),
                'nazwisko'=>Str::random(10),
                'kraj'=>Str::random(10),
                'ulica'=>Str::random(10),
                'telefon'=>rand(100000000,999999999)

            ]);
        }
    }
}
