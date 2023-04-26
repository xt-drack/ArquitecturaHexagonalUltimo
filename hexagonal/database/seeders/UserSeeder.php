<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($index = 0; $index<=10; $index++) {
            DB::table('users')->insert([
                 'first_name' => 'default' . $index,
                 'last_name' => 'default' . $index,
                 'email' => "user". $index . '@gmail.com',
                 'cellphone' => '123456789' . $index,
                 'password' => password_hash('password', PASSWORD_DEFAULT),
                 'state_id' => rand(1,4),
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now(),

            ]);
        }
    }
}
