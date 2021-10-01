<?php
namespace Database\Seeders;


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
        $this->call(UserTableSeeder::class);
        $this->call(ProvedoresTableSeeder::class);
        $this->call(ColaboradoresTableSeeder::class);
        $this->call(TokensTableSeeder::class);
    }
}
