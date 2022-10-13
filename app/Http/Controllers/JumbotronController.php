<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use App\Models\Jumbotron;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Jumbotron::select('foto','link','id')->get();
        return view('admin.jumbotron.index' , ['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jumbotron.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoExt = $request->file('foto')->getClientOriginalExtension();
        $foto = date("dmYHis").".".$photoExt;
        Storage::disk('local')->putFileAs('public',$request->file('foto'), $foto);
        $data = array(
            'foto' => $foto
        );
        Jumbotron::create($data);
        return redirect('/jumbotron');
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
        $banner = Jumbotron::find($id);
        return view('admin.jumbotron.edit' , ['banner' => $banner]);
        
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
        $data = array(
            'link' => $request->input('link'),
        );
        Jumbotron::where('id' , $id)->update($data);
        return redirect('/jumbotron');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //dd($id);
        $data = Jumbotron::find($id);
        $data->delete();
        //Jumbotron::delete($id);
        return redirect()->back();
    }
}
