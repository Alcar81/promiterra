<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'master']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'superuser']);
        Role::create(['name' => 'user']);
    }
}
