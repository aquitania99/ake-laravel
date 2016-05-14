<?php

use Illuminate\Database\Seeder;
use Minotaur\Models\User;
use Minotaur\Models\Profile;

class UsersTableSeeder extends Seeder
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

        factory(Minotaur\Models\User::class, 10)->create()->each(function ($user) {

            $profile = factory(Minotaur\Models\Profile::class)->make();

            $user->profile()->save($profile);
        });
    }
}
