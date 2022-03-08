<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('users')->insert([
            'name' => 'Joy Boy',
            'email' => 'joyboy@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => 123,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
