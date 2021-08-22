<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Add calls to Seeders here
        $this->call(UsersTableSeeder::class);
        $this->call(BacklogsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

        Model::reguard();
    }
}
