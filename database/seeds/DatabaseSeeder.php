<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
