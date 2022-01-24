<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required'
        ]);
         // Create New Messag
       $message = new Message;  
       $message->name=$request->input('name'); 
       $message->email=$request->input('email');      
       $message->message=$request->input('message');
       // save message
       $message->save();      
       // Redirect
       return redirect('/contact')->with('success','Message Sent');
    }
}
