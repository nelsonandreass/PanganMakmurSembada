<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Models\Store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::get();
        return view('admin.store.index' , ['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoExt = $request->file('logo')->getClientOriginalExtension();
        $foto = date("dmYHis").".".$photoExt;
        Storage::disk('local')->putFileAs('public',$request->file('logo'), $foto);
        $url = $request->input('url');
        $store = $request->input('store');
        $islinktree = $request->input('islinktree');
        $data = array(
            'logo' => $foto,
            'url' => $url,
            'namastore' => $store,
            'is_linktree' => $islinktree
        );
        Store::create($data);
        return redirect('/store');
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
        $data = Store::find($id);
        return view('admin.store.edit' , ['data' => $data]);
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

        $photoExt = $request->file('foto')->getClientOriginalExtension();
        $foto = date("dmYHis").".".$photoExt;
        Storage::disk('local')->putFileAs('public',$request->file('foto'), $foto);
        $url = $request->input('url');
        $store = $request->input('store');
        $islinktree = $request->input('islinktree');
        $data = array(
            'logo' => $foto,
            'url' => $url,
            'namastore' => $store,
            'is_linktree' => $islinktree
        );
        Store::where('id' , $id)->update($data);
        return redirect('/store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Store::find($id);
        $image_path = '/public/'.$data->foto;
        if(Storage::exists($image_path)){
            Storage::delete($image_path);
        } 
        else{
            die("Failed");
        }
        $data->delete();
        return redirect()->back();
    }
}
