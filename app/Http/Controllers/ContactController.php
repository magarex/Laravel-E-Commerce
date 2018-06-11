<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index(){

        return view('contact');

    }


    public function postContact(Request $request){

        $this->validate($request, [
           'name'=> 'required',
           'email'=>'required',
            'message'=>'required'
        ]);

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'messages'=>$request->message
        );

        Mail::send('emails.contact' , $data , function ($message) use ($data){
            $message->to('laraveldenememail@gmail.com');
            $message->subject('Websitenizden Mesajınız Var');
            $message->from('nazmul@yahoo.com');
        });

        return redirect()->back();
    }

}
