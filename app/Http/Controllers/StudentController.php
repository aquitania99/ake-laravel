<?php

namespace Akela\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Akela\Http\Requests;
use Akela\Models\User;

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
        $data=User::all();
        return view('students.list-students')->with('data',$data);
    }

    public function addUser()
    {
        return view('students.add');
    }

    public function storeUser(Request $request)
    {
        //@TODO Validate data from the add user form

        // Add new user to Database
        $user = New User();

        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->username = 'papafrita';
        $user->email = $request['email'];
        $user->password = bcrypt('Pass@word01');
        $user->mobile = $request['mobile'];
        $user->gender = $request['gender'];
        $user->dob = $request['dob'];
        $user->birth_country = 'tangamandapio';
        $user->birth_city = $request['birth-city'];


        $user->save();

        dd('dd',$user);exit;

//        return Response::HTTP_CREATED;

        return view('scratch', [ 'test' => $userData ]);


    }

    public function searchUser(Request $request)
    {
        return view('students.search-students');

    }

    public function listUsers(Request $request)
    {
        $userData = json_encode( $request->getContent() );

    }

    public function showDocs()
    {
        return view('students.show-docs');

    }
}
