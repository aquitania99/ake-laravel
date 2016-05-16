<?php

namespace Minotaur\Http\Controllers;

use Illuminate\Http\Request;

use Minotaur\Http\Requests;
use Minotaur\Models\Profile;

class ProfileController extends Controller
{
    public function show($id) {
//        $profile = Profile::with('user')->get();
        $profile = Profile::findOrFail($id);
//        var_dump($profile);exit;
        return view('students.user-profile', ['profile' => $profile]);
    }
}
