<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use App\User;
use App\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        DB::table('role_user')->truncate();
        Schema::enableForeignKeyConstraints();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        $master = User::create([
            'name' => 'master',
            'email' => 'master@master.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@editor.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        $superuser = User::create([
            'name' => 'superuser',
            'email' => 'super@super.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $masterRole = Role::where('name', 'master')->first();
        $editorRole = Role::where('name', 'editor')->first();
        $superuserRole = Role::where('name', 'superuser')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin->roles()->attach($adminRole);
        $master->roles()->attach($masterRole);
        $editor->roles()->attach($editorRole);
        $superuser->roles()->attach($superuserRole);
        $user->roles()->attach($userRole);

    }
}
