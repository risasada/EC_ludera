<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\Customer;
use Stripe\Stripe;
use Stripe\Charge;


class PaymentController extends Controller
{
    public function index()
    {
        return view("payment");
    }
    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET')); //シークレットキー

        Charge::create(array(
            'amount' => 500,
            'currency' => 'jpy',
            'source' => request()->stripeToken
        ));
        return redirect()->route('cart');;
    }
}
