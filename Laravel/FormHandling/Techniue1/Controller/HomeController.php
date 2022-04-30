<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        return view('Home.Index');
    }

    public function GetData(Request $req)
    {
        $data['FormData'] = $req->all();
        return view('Home.GetData',$data);
    }

}
