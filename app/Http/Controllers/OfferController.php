<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $isOfferExists = array(
            'foto' => "",
            'header' => "",
            'detail' => "",
            'discounted_price' => "",
            'original_price' => ""
        );
        $isOfferExists = Offer::get();
        $flag ="0";
        if(!empty($isOfferExists)){
            $flag = "1";
        }
        return view('admin.offer.index' , ['flag' => $flag , 'data' => $isOfferExists]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header = $request->input("header");
        $detail = $request->input("detail");
        $discounted_price = $request->input("discountedPrice");
        $original_price = $request->input("originalPrice");

        $photoExt = $request->file('foto')->getClientOriginalExtension();
        $foto = date("dmYHis").".".$photoExt;
        Storage::disk('local')->putFileAs('public',$request->file('foto'), $foto);
        $data = array(
            'foto' => $foto,
            'header' => $header,
            'detail' => $detail,
            'original_price' => $original_price,
            'discounted_price' => $discounted_price
        );
        Offer::create($data);
        return redirect('/offer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $offer = Offer::find($id);
        return view('admin.offer.edit' , ['offer' => $offer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $header = $request->input("header");
        $detail = $request->input("detail");
        $discounted_price = $request->input("discountedPrice");
        $original_price = $request->input("originalPrice");

        $photoExt = $request->file('foto')->getClientOriginalExtension();
        $foto = date("dmYHis").".".$photoExt;
        Storage::disk('local')->putFileAs('public',$request->file('foto'), $foto);
        $data = array(
            'foto' => $foto,
            'header' => $header,
            'detail' => $detail,
            'original_price' => $original_price,
            'discounted_price' => $discounted_price
        );

        Offer::where('id' , $id)->update($data);
        return redirect('/offer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
