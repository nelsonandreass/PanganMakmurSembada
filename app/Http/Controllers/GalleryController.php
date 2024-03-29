<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Gallery;
use App\Models\Category;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Gallery::get();
        return view('admin.gallery.index' , ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id' , 'nama')->get();
        return view('admin.gallery.create' , ['categories' => $categories]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function clearcache(){
        cache()->forget("banner_cache");
        cache()->forget("gallery_cache");
        cache()->forget("minigallery_cache");
    }
    
    public function store(Request $request)
    {
        $photoExt = $request->file('foto')->getClientOriginalExtension();
        $foto = date("dmYHis").".".$photoExt;
        Storage::disk('local')->putFileAs('public',$request->file('foto'), $foto);
        $category = $request->input('category');
        $nama = $request->input('nama');
        $jenis = $request->input('jenis');
        $ukuran = $request->input('ukuran');

        $data = array(
            'foto' => $foto,
            'category' => $category,
            'nama' => $nama,
            'jenis' => $jenis,
            'ukuran' => $ukuran
        );
        Gallery::create($data);
        $this->clearcache();
        return redirect()->back();
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
        $gallery = Gallery::find($id);
        $categories = Category::get();
        return view('admin.gallery.edit', ['gallery' => $gallery, 'categories' => $categories , 'id' => $id]);
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
        
        $nama = $request->input("nama");
        $jenis = $request->input("jenis");
        $ukuran = $request->input("ukuran");

        $data = array(
            'nama' => $nama,
            'jenis' => $jenis,
            'ukuran' => $ukuran
        );

        Gallery::where('id' , $id)->update($data);
        $this->clearcache();

        return redirect("/gallery");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        $image_path = '/public/'.$data->foto;
        if(Storage::exists($image_path)){
            Storage::delete($image_path);
        } 
        else{
            die("Failed");
        }
        $data->delete();
        $this->clearcache();

        return redirect()->back();
    }
}
