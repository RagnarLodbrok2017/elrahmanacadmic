<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shift')->insert(array(
            array(
                'id' =>'1',
                'time' => 'من 8 الى 1',
                'description' => 'فترة أولى',
            ),
            array(
                'id' =>'2',
                'time' => 'من 2 الى 5',
                'description' => 'فترة ثانية',
            ),
        ));
    }
}
