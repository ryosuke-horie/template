<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $request->first-name;
        $request->last-name;
        $request->company;
        $request->email;
        $request->subject;
        $request->message;
        dd('contact test', $request->last-name, $request->first-name, $request->company, $request->email, $request->subject, $request->message);
        return null;
    }
}
