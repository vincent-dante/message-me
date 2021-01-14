<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Events\MessageSent;

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
      //return Message::where('receiver_id', $id)->where('user_id', $user->id)->where('receiver_id', $user->id)->where('user_id', $id)->get();
      $result = DB::select('select * from messages msg where (msg.user_id = ? AND msg.receiver_id = ?) OR (msg.receiver_id = ? AND msg.user_id = ?)',[$user->id, $id, $user->id, $id]);
      //$result = DB::select('select * from messages msg where msg.user_id = ? AND msg.receiver_id = ?',[$user->id, $id]);
      return $result;
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
      $message = new Message;
			$message->user_id = $user->id;
			$message->receiver_id = $request->recipient;
      $message->message = $request->message;
      $message->save();


/*       $message = $user->create([
        'message' => $request->input('message')
      ]); */
    
      broadcast(new MessageSent($user, $message))->toOthers();
    
      return ['status' => 'Message Sent!'];
    }

}
