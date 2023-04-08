<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\EmailJob;


class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $destination = $request->input("email");
        // $name = $request->input("nama");
        // $data = [
        //     'subject' => 'Pangan Makmur Sembada',
        //     'body' => "Halo ". $name . "\n\n Terimakasih telah menghubungi kami. Tim Bisnis kami akan segera menghubungi anda. \n\n Terimakasih"
        // ];
        // try {
        //     Mail::to($destination)->send(new MailNotif($data));
        //     return redirect()->back()->with("success" , "true");
        // } catch (Throwable $th) {
        //     return response()->json(['Failed']);
        // }
        $request = array(
            'destination' => $request->input("email"),
            'name' => $request->input("nama"),
            'data' => array(
                'subject' => 'Pangan Makmur Sembada',
                'body' => "Halo ". $request->input("nama") . "\n\n Terimakasih telah menghubungi kami. Tim Bisnis kami akan segera menghubungi anda. \n\n Terimakasih"
            )
        ); 
        $job = new EmailJob($request);
        $this->dispatch($job);
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
        //
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
        //
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
