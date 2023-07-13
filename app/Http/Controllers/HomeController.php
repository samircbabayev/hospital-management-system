<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect()
    {
      if(!Auth::id()) {
        return redirect()->back();
      }

      if(Auth::user()->usertype === '0') {
        return view('dashboard');
      }

      return view('admin.home');
    }
}
