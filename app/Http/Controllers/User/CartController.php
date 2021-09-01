<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $user = User::findOrFail(Auth::id());
        $products = $user->products;
        $totalPrice = 0;

        foreach($products as $product){
            $totalPrice += $product->price * $product->pivot->quantity;
        }
        //dd($products, $totalPrice);

        return view('user.cart', compact('products', 'totalPrice'));
    }
    public function add(Request $request){
        //dd($request);
        $ItemInCart = Cart::where('product_id', $request->product_id)
        ->where('user_id', Auth::id())->first();

        if($ItemInCart){
            $ItemInCart->quantity += $request->quantity;
            $ItemInCart->save();
        } else {
            Cart::Create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }
        return redirect()->route('user.cart.index');
    }

    public function delete($id){
        Cart::where('product_id', $id)
        ->where('user_id', Auth::id())
        ->delete();

        return redirect()->route('user.cart.index');
    }

    public function checkout(){
        $user = User::findOrFail(Auth::id());
        $products = $user->products;
        //lineItems:カートに入っている情報
        $lineItems = [];

        foreach($products as $product){
            $lineItem = [
                'name' => $product->name,
                'description' => $product->information,
                'amount' => $product->price,
                'currency' => 'jpy',
                'quantity' => $product->pivot->quantity,
            ];
            array_push($lineItems,$lineItem);
        }
        // dd($lineItems);
        require 'vendor/autoload.php';
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [$lineItems],
            'payment_method_types' => ['card',],
            'mode' => 'payment',
            'success_url' => route('user.items.index'),
            'cancel_url' => route('user.cart.index'),
        ]);

        $publicKey = env('STRIPE_PUBLIC_KEY');

        return view('user.checkout', compact('checkout_session', 'publicKey'));
    }
}