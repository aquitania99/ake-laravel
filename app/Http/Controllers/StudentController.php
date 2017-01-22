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

        if ($request->isMethod('post')) {
            //
//            dd( 'dd',$request->getContent(), $request->input('firstname') );
//            $dob = $request->input('birth-year') ."-". $request->input('birth-month') ."=" . $request->input('birth-day');
            $dob ="1975-01-25";
            // Add new user to Database
            $user = New User();

            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->username = $request->input('email');
            $user->email = $request->input('email');
            $user->password = bcrypt('Pass@word01');
            $user->mobile = $request->input('mobile');
            $user->gender = $request->input('gender');
            $user->dob = $dob;
            $user->birth_country = $request->input('birth-country');
            $user->birth_city = $request->input('birth-city');


            $user->save();

            dd('dd',$user);

        }


        return Response::HTTP_CREATED;

//        return view('scratch', [ 'test' => $user->jsonSerialize() ]);


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
