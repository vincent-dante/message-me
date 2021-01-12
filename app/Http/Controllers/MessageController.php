<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('message');
    }

    /**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		*/
    public function getMessage($id){
      $user = Auth::user();
      return Message::where('receiver_id', $id)->where('user_id', $user->id)->get();
    }


    
    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
      $user = Auth::user();
      
      /* 
       * messages() method in the User.php
       */
/*       $message = $user->messages()->create([
        'message' => $request->input('message')
      ]);
    
      broadcast(new MessageSent($user, $message))->toOthers(); */
    
      return ['status' => 'Message Sent!'];
    }

}
