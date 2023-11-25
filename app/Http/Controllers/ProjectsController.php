<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function Project(){
        $active = "projects";
        return view("ContentArea.Projects", compact('active'));
    }

}
