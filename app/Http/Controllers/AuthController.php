<?php

namespace Minotaur\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Minotaur\Http\Requests;

class AuthController extends Controller
{
    public function index() {
        return view('auth.register-counsellor');
    }

    public function store(Request $request) {
//        dd($request->all());
        $counsellor = \GuzzleHttp\json_encode($request->getContent());
//        var_dump($counsellor);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
//        return view('auth.register-counsellor', ['counsellor', $counsellor]);
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->route('counsellor_show_path')->withErrors(['PAILA!',$counsellor]);
        }

        return new JsonResponse('COOL BEANS!',200);
    }
}
