<?php

use Illuminate\Database\Seeder;

class TalentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(__DIR__."/talents_table.sql"));
    }
}
