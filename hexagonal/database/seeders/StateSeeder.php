<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StateSeeder extends Seeder
{
    private array $states = [
        'deshabilitado',
        'activo',
        'bloqueado',
        'denegado'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        foreach($this->states as $state) {
            DB::table('states')->insert([
                'name' => $state,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
