<?php

use Illuminate\Database\Seeder;

class PassportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Minotaur\Models\Passport::class, 10)->create();
//            ->each(function ($passport) {
//
//            $profile = factory(Minotaur\Models\Profile::class)->make();
//
//            $profile->passport()->save($passport, 'prf_id', 'id');

//            $counsellor = factory(Minotaur\Models\Counsellor::class)->make();
//            $user->counsellor()->save($counsellor);
//        });
    }
}
