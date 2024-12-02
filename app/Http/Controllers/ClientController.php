<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.tes');
    }

    public function contact()
    {
        return view('client.contact');
    }
}
