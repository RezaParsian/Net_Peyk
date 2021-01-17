<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MakeUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"رضا پارسیان",
            "email"=>"Rezaparsian76@gmail.com",
            "password"=>Hash::make("12345678")
        ]);
    }
}
