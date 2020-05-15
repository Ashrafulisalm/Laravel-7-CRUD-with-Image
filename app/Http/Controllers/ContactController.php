<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Image::all();
        return view('Contact.contacts',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Hello Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $con=new Contact;
        $con->name=$request->name;
        $con->email=$request->email;
        $con->phone=$request->phone;
        $con->address=$request->address;



        $imgs=new Image;
        $img=$request->file('image');
        if($img){
            $img_n=Str::random('10');
            $ext=strtolower($img->getClientOriginalExtension());
            $image_fn=$img_n.'.'.$ext;
            $path="image/";
            $img_url=$path.$image_fn;
            $success=$img->move($path,$image_fn);

            if($success){
                $con->save();
                $insertId=$con->id;
                $imgs->contact_id=$insertId;
                $imgs->image=$img_url;
                $imgs->save();

                //console.log("Data inserted");
                return redirect()->back();
            } else {
                return redirect()->back();
               // console.log("Something Wrong");
            }
        }

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
