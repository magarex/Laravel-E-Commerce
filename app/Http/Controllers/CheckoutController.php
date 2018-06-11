<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function shipping(){

        if (Auth::check()){
            return view('shipping-form');
        }
        return redirect('/login');

    }
}
