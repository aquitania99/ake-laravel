<?php

use Illuminate\Database\Seeder;
use Minotaur\Models\Counsellor;
use Minotaur\Models\User;

class CounsellorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
        Counsellor::truncate();
        
        factory(Counsellor::class, 2)->create();
//            ->each(function ($counsellor) {
//
//            $user = factory(User::class)->make();
//
//            $user->counsellors()->save($user);
//            dd($user);
//        });
    }
}
