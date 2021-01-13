<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
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

    public function getUsers()
    {
      $users = User::where('id', '!=', auth()->id())->get();
			return response()->json($users);
    }    

    public function getCurrentUser()
    {
      $user = Auth::user();
      return $user->id;
    }    

}
