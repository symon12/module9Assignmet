<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function Contact(){
        $active = "contact";
        return view("ContentArea.Contact", compact('active'));
    }
}
