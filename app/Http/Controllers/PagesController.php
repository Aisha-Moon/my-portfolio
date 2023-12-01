<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\About;
use App\Models\Contact_img;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        $services = Service::all();
        $portfolios = Portfolio::all();
        $abouts = About::all();
        $main = Main::first();
       $contact = Contact_img::first();
        
        return view('frontend.home',compact('main','services','portfolios','abouts','contact'));
    }
   

}
