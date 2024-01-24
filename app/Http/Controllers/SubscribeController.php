<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
      $subscribe = new Subscribe();
      $subscribe->user_id = Auth::user()->id;
      $subscribe->email = $request->email;

      $subscribe->save();
      return redirect()->back()->with(['message' => 'Thank You for Subscribimg us!!']);
    }
}
