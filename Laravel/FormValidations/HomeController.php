<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function MyForm()
    {
        return view("Home.MyForm");
    }

    public function FormValidate(Request $req)
    {
        // Applying validation rules by using associative array (key value) pairs.
        $req->validate([
            'name' => 'required'
        ]);
        return view("Home.FormValidate");
    }
}
