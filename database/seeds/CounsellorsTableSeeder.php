<?php

use Illuminate\Database\Seeder;
use Akela\Models\Counsellor;
use Akela\Models\User;
use Akela\Models\Profile;

class CounsellorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Profile::truncate();
        Counsellor::truncate();

        factory(Counsellor::class, 3)->create()->each(function ($counsellor) {

            $user = factory(Akela\Models\User::class)->make();

            $counsellor->users()->save($user);

        });
    }
}
