<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function Index()
   {
       return view('Home.Index');
   }

   public function About()
   {
       return view('Home.About');
   }

   public function Contact()
   {
       return view('Home.Contact');
   }
}
