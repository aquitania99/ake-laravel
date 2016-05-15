<?php

namespace Minotaur\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Minotaur\Http\Requests;

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
        return view('students.student');
    }

    public function store(Request $request)
    {
        $userData = json_encode( $request->getContent() );

    }
}
