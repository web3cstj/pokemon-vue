<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Martin',
            'email'=>'mboudreau@cstj.qc.ca',
            'password'=>'$2y$10$/ZJjfjfFTUGDgopeQ.HI8O108qtx0HMKYqp1JdTKkDxeDEsDNfcBO',
        ]);
    }
}
