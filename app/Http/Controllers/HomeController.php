<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        function Home(){
            $active = "home";
            return view("ContentArea.Home", compact('active'));
        }
}
