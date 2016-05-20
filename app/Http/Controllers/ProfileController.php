<?php

namespace Akela\Http\Controllers;

use Illuminate\Http\Request;

use Akela\Http\Requests;
use Akela\Models\Profile;

class ProfileController extends Controller
{
    public function show($id) {
//        $profile = Profile::with('user')->get();
        $profile = Profile::findOrFail($id);
//        var_dump($profile);exit;
        return view('students.user-profile', ['profile' => $profile]);
    }
}
