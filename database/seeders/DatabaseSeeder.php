<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user= User::create([
            "username"=>"noor",
            "password"=>"1234",
            "f_name" => "noor",
            "f_nameB"=>"Mohammad",
            "gender"=>"male",
            "blood"=>"a+",
            "dob"=>"2017-06-15",
            "present_adress"=>"monipur",
            "mobile"=>"01571238110",
            "email"=>"djvdfv@gmail.com",
            "fb_link"=>"sdvvfdvds.com/dfvfd",
            "ju_batch"=>"1st",
            "iit_batch"=>"2nd",
            "hor"=>"dfvdvdvdfv",
            "ac_session"=>"vfdvdfv",
            "degree_obt"=>"dfvdfv",
            "occupation"=>"dfbdfb",
            "designation"=>"dbdb",
            "organization"=>"fnfg",
            "adress_org"=>"smjff",
        ]);
    }
}
