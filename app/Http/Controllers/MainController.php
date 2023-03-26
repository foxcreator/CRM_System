<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function clients()
    {
        return view('clients');
    }

    public function orders()
    {
        return view('orders');
    }

    public function cars()
    {
        return view('cars');
    }

    public function employers()
    {
        return view('employers');
    }

}
