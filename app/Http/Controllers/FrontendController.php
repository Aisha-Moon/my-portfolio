<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Contact_img;
use App\Models\Main;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function service(){
          $services = Service::all();
        $main = Main::first();
        return view('frontend.includes.service',compact('services','main'));
   }
   public function portfolio(){

        $portfolios = Portfolio::all();
        $main = Main::first();
        return view('frontend.includes.portfolio',compact('portfolios','main'));
   }
   public function about(){

        $abouts = About::all();
         $main = Main::first();
        return view('frontend.includes.about',compact('abouts','main'));
   }
   public function contact(){


       $main = Main::first();
       $contact = Contact_img::first();
        

        return view('frontend.includes.contact',compact('main','contact'));
   }
}
