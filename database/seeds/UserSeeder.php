<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=10000; $i++) {
            DB::table("users")->insert([
                "name" => sprintf("load_test_%d", $i),
                "email" => sprintf("load_test_%d@gmail.com", $i),
                "password" => Hash::make("testtesttest"),
            ]);
        }
    }
}
