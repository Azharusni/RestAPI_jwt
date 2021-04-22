<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'class_id'=>102,
            'section_id'=>205,
            'name'=>Str::random(10),
            'phone'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'password'=>Str::random(10),
            'photo'=>Str::random(10),
            'address'=>Str::random(10),
            'gender'=>Str::random(10),

        ]);
    }
}
