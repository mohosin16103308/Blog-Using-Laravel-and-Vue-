<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;


class PostController extends Controller
{


 public function checkout(Request $request)
 {
    // dd($request->all());
    try {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
        $customer = Customer::create(array(
            'email' => $request->stripeEmail,
            'source' => $request->stripeToken
        ));
    
        $charge = Charge::create(array(
            'customer' => $customer->id,
            'amount' => 3000,
            'currency' => 'usd'
        ));
    
        return 'Charge successful, you get the course!';
    } catch (\Exception $ex) {
        return $ex->getMessage();
    }
 }


    public function subscribe_process(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
            $user = User::where('id', 1)->first();
            $user->newSubscription('main', 'base')->create($request->stripeToken);
    
            return 'Subscription successful, you get the course!';
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /**
     *Return Data With User and Category
     */
        // return Post::with('user','category')->get();

     /**
     *Return Data With Posts based on User Id
     */
        return User::with('posts')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
