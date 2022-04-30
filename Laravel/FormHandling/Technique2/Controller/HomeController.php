<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function MyForm()
    {
        return view('Home.MyForm');
    }

    public function GetMyForm(REquest $req)
    {
        $data['FormData'] = $req->all();
        return view('Home.GetMyForm',$data);
    }
}
