<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ContactsController extends Controller
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



    public function index($user){


        $user  = User::find($user);


        return view('contacts',[
            'user'=>$user

        ]);


    }
}
