<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class ordersController extends Controller
{
    public function index(){
        $amount = 100;
        return view('frontEnd.checkOut.checkout' , compact('amount'));
    }

    public function charge(Request $request){
        $charge = Stripe::charges()->create([
            'currency'    => 'USD',
            'source'      => $request->stripeToken,
           'amount'      => $request->amount,
            'description' => 'Test Form Laravel new app'
        ]);

        $chargeId = $charge['id'];
        if ($chargeId){
            session()->forget('cart');
            return redirect('checkout')->with('success','Payment Was Done. Thanks');
        }else{
            return redirect()->back();
        }
    }
}
