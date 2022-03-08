<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array
        DB::table('posts')->insert([
            'title' => 'Post Data',
            'description' => 'Sample Data',
            'photo' => 'test',
            'user_id' => 1,
            'created_at' => Carbon::now()
        ]);
       
    }
}
