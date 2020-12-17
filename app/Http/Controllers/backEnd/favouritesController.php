<?php

namespace App\Http\Controllers\backEnd;

use App\Models\User;
use App\Models\Product;
use App\Models\Favourite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class favouritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
    public function store($id,Request $request)
    {   
        $product = Product::find($id);
        // dd($product);
        $product->favourits()->create([
            'user_id' => $request->user()->id
        ]);

         return back();   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Favourite $favourite)
    {
       $user = User::find($id);
        
        // $products = $user->favourits()->get();
      
       $products = $favourite->where('user_id',$user->id)->get();
    //    dd($products); 
        // dd($products->favourits()->where('user_id',$user->id)->get());

       return view('frontEnd.usersFavourit',['products'=>$products,'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
     
        $product->favourits()->where('product_id',$product->id)->delete();
        return back();
    }
}
