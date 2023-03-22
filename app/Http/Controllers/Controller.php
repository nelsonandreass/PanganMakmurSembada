<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;

use App\Models\Gallery;
use App\Models\Store;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mobirise(){
        return view('mobirise');
    }


    public function index(){
        // banner
        $banners = Cache::rememberForever("banner_cache",function (){
            return Gallery::where("category" , "=" , "Banner")->get();
        });
        $first_banner = $banners[0];
        unset($banners[0]);
        // end of banner

        // mini gallery
        $mini_galleries = Cache::rememberForever("minigallery_cache",function (){
            return Gallery::where("category" , "=" , "MiniGallery")->take(8)->get();
        });
        //end of mini gallery

        // product
        $products = Cache::rememberForever("gallery_cache",function (){
            return Gallery::where("category" , "=" , "Product")->get();
        });
        // end of product

        //store
        $stores = Store::get();
        foreach($stores as $key => $store){
            if($store->namastore == "Pangan Makmur Sembada" || $store->namastore == "Whatsapp"){
                unset($stores[$key]);
            }
        }
        //end of store

        return view('lending' , ['banners' => $banners , 'first_banner' => $first_banner , "minigalleries" => $mini_galleries , 'products' => $products, 'stores' => $stores]);
    }
    
}
