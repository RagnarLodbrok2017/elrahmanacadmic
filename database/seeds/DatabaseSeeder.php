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
        $this->call([
            LevelTableSeeder::class,
            ShiftTableSeeder::class,
            StageTableSeeder::class,
            StatusTableSeeder::class,
            TypeTableSeeder::class,
            ClassroomTableSeeder::class,

        ]);
    }
}
