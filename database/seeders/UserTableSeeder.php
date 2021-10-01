<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'                => 1,
            'code'              => '2dPsQxPM',
            'name'              => 'Felipe Sousa',
            'email'             => 'sousa.felipe@spark.com',
            'password'          => bcrypt('marver1234'),
            'remember_token'    => Str::random(32),
            'created_at'        => Carbon::now()
        ]);
    }
}
