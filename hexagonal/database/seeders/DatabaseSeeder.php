<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 1",
            "status" => 1,
            "delete" => 0
        ]);
        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 2",
            "status" => 1,
            "delete" => 0
        ]);

        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 3",
            "status" => 1,
            "delete" => 0
        ]);

        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 4",
            "status" => 1,
            "delete" => 0
        ]);

        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 5",
            "status" => 1,
            "delete" => 0
        ]);

        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 6",
            "status" => 1,
            "delete" => 0
        ]);

        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 7",
            "status" => 1,
            "delete" => 0
        ]);

        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 8",
            "status" => 1,
            "delete" => 0
        ]);

        \Src\Application\Group\Infrastructure\Repositories\Eloquent\Group::create([
            "name" => "Grupo 9",
            "status" => 1,
            "delete" => 0
        ]);

        ///ESTADOS o PROVINCIAS
        \Src\Application\Province\Infrastructure\Repositories\Eloquent\Province::create([
            "name" => "Pichincha",
            "status" => 1,
            "delete" => 0
        ]);
        \Src\Application\Province\Infrastructure\Repositories\Eloquent\Province::create([
            "name" => "Tungurahua",
            "status" => 1,
            "delete" => 0
        ]);
        \Src\Application\Province\Infrastructure\Repositories\Eloquent\Province::create([
            "name" => "Bolivar",
            "status" => 1,
            "delete" => 0
        ]);
        \Src\Application\Province\Infrastructure\Repositories\Eloquent\Province::create([
            "name" => "Manabi",
            "status" => 1,
            "delete" => 0
        ]);
        \Src\Application\Province\Infrastructure\Repositories\Eloquent\Province::create([
            "name" => "Chimborazo",
            "status" => 1,
            "delete" => 0
        ]);
        \Src\Application\Province\Infrastructure\Repositories\Eloquent\Province::create([
            "name" => "El manso Guayas",
            "status" => 1,
            "delete" => 0
        ]);
        ///CIUDADES
        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Quito",
            "status" => 1,
            "delete" => 0,
            "province_id" => 1
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Ambato",
            "status" => 1,
            "delete" => 0,
            "province_id" => 2
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Guaranda",
            "status" => 1,
            "delete" => 0,
            "province_id" => 3
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Manta",
            "status" => 1,
            "delete" => 0,
            "province_id" => 4
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Riobamba",
            "status" => 1,
            "delete" => 0,
            "province_id" => 5
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Guayaquil",
            "status" => 1,
            "delete" => 0,
            "province_id" => 6
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Sangolqui",
            "status" => 1,
            "delete" => 0,
            "province_id" => 1
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Cumbaya",
            "status" => 1,
            "delete" => 0,
            "province_id" => 1
        ]);

        \Src\Application\City\Infrastructure\Repositories\Eloquent\City::create([
            "name" => "Machachi",
            "status" => 1,
            "delete" => 0,
            "province_id" => 1
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 1",
            "status" => 1,
            "delete" => 0,
            "price" => 10.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 2",
            "status" => 1,
            "delete" => 0,
            "price" => 20.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 3",
            "status" => 1,
            "delete" => 0,
            "price" => 30.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 4",
            "status" => 1,
            "delete" => 0,
            "price" => 40.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 5",
            "status" => 1,
            "delete" => 0,
            "price" => 50.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 6",
            "status" => 1,
            "delete" => 0,
            "price" => 60.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 7",
            "status" => 1,
            "delete" => 0,
            "price" => 70.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 8",
            "status" => 1,
            "delete" => 0,
            "price" => 80.00
        ]);

        \Src\Application\Plan\Infrastructure\Repositories\Eloquent\Plan::create([
            "name" => "Plan 9",
            "status" => 1,
            "delete" => 0,
            "price" => 90.00
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Urgentito",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 1,
            "city_id" => 1,
            "group_id" => 1,
            "plan_id" => 1,
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Casabaca",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 2,
            "city_id" => 2,
            "group_id" => 2,
            "plan_id" => 3,
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Urgentito Valle",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 3,
            "city_id" => 3,
            "group_id" => 3,
            "plan_id" => 4,
        ]);
        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Orgu Ford",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 4,
            "city_id" => 4,
            "group_id" => 5,
            "plan_id" => 8,
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Quito Motors",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 5,
            "city_id" => 5,
            "group_id" => 7,
            "plan_id" => 6,
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Autosueños",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 2,
            "city_id" => 2,
            "group_id" => 6,
            "plan_id" => 9,
        ]);



        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Autosueños",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 2,
            "city_id" => 2,
            "group_id" => 6,
            "plan_id" => 9,
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Gye motors",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 5,
            "city_id" => 5,
            "group_id" => 7,
            "plan_id" => 8,
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Patio Tuerca motors",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 6,
            "city_id" => 6,
            "group_id" => 3,
            "plan_id" => 4,
        ]);

        \Src\Management\Dealer\Infrastructure\Repositories\Eloquent\Dealer::create([
            "name" => "Ambacar",
            "status"=> 1,
            "delete" => 0,
            "due_date" => "2023-03-31 11:11:11",
            "frequency" => "1",
            "province_id" => 1,
            "city_id" => 8,
            "group_id" => 3,
            "plan_id" => 4,
        ]);
        $this->call([
            StateSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,

        ]);
    }
}
