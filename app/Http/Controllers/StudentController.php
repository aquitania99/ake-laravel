<?php

namespace Minotaur\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Minotaur\Http\Requests;
use Minotaur\Models\User;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::all();
//        $array = array();
//        foreach ($users as $key => $user) {
//            $array[] = [
//                'name'  => $user->firstname.' '.$user->lastname,
//                'email' => $user->email,
//                'gender' => $user->gender,
//                'nationality' => $user->nationality,
//                'dob' => $user->dob,
//                'created' => $user->created_at
//            ];
//        }
//        $test = json_encode($array, true);
//        dd($users->firstname);
        return \View::make('students.list-students');
//        return \View::make('students.list-students')->with('test', $array);
    }

    public function addUser()
    {
        return view('students.add');
    }

    public function storeUser(Request $request)
    {
        $userData = json_encode( $request->getContent() );

    }

    public function searchUser(Request $request)
    {
        return view('students.search-students');

    }

    public function listUsers(Request $request)
    {
        $userData = json_encode( $request->getContent() );

    }
}
