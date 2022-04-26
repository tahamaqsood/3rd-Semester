<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Creating Index Function
    public function Index()
    {
        return view('Home.Index');
    }

    //Creating About Function
    public function About()
    {
        return view('Home.About');
    }

    //Creating Contact function
    public function Contact()
    {
        return view('Home.Contact');
    }

    //Creating Parametarized Function to get/recieve string value from Url
    public function ShowName($name)
    {
        return "Your name is: $name";
    }

    //Creating Parametarized Function to get/recieve string value from Url
    public function GetID($id)
    {
        return "Your id is: $id";
    }
}
