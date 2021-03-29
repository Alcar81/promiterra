<?php
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Character;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *  $this->call(RolesTableSeeder::class);
     *  $this->call(UsersTableSeeder::class);
     *  $this->call(CitiesTableSeeder::class);
     *
     *
     * @return void
     */
    public function run()
    {
        // the Eloquent part and disabling and enabling of foreign keys is only intended for development
        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        factory(App\Models\City::class, 10)->create();
        //factory(App\Models\Character::class, 1)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
