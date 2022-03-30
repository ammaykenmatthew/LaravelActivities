<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('index'); //return a view file 
    }
    public function contactus(){ //contact us page 
        // $name = 'Robert Jr';
        // $email  = 'robertJr@gmail.com';
        // return view ('pages.about', compact('name', 'email')); 

        // return view('pages.contactus', ['name' => 'Ken Ammay']);
        
        return view ('pages.contactus')->with('name', 'Show Speed')->with('email', 'ShowSpeed@gmail.com');
    }
}
