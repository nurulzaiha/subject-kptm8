<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name'=> 'MATH 1',
            'description' => 'statistik',
            'lecturer'=> 'En tarmizi',
            //'user_id'=>factory('App\User')->create()-id,
        //
        ]);
        
    }
}
