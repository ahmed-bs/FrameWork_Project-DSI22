<?php
namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CheckController extends Controller
{
    public function index()
    { Stripe::setApiKey('sk_test_dBWWV4fxKl15cCOp7HdwQB4M00xTXyD2K2');
        $intent = PaymentIntent::create([
            'amount' => round(Cart::total()),
            'currency' => 'eur',
        ]);
        return view('check.index', [
            'clientSecret' => Arr::get($intent, 'clientSecret')
        ]);
    }
    public function charge(Request $request)
    {
        $data = $request->json()->all();

        return $data['paymentIntent']['amount'];
    }
}