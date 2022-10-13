<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Jumbotron;
use App\Models\Faq;
use App\Models\Offer;
use App\Models\Gallery;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        // banner
        $banners = Gallery::where("category" , "=" , "Banner")->get();
        $count = count($banners);
        $first_banner = $banners[0];
        unset($banners[0]);
       
        // end of banner

        // mini gallery
        $mini_galleries = Gallery::where("category" , "=" , "MiniGallery")->take(8)->get();
        //dd($mini_galleries);
        //end of mini gallery

        // faq
        $faqs = Faq::get();
        // end of faq

        //offer
        $offer = Offer::first();
        //end of offer

        return view('lending' , ['banners' => $banners , 'first_banner' => $first_banner , "minigalleries" => $mini_galleries , 'counter' => $count , 'faqs' => $faqs , 'offer' => $offer]);
    }
    
}
