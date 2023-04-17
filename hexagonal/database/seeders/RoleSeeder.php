<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RoleSeeder extends Seeder
{

    private array $roles = [
        'super_admin',
        'natural'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        foreach($this->roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
