<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function taxi_order(){
        $places = Place::all();
        return view('taxi_order', ['places'=>$places]);
    }



    public function order_result(Request $request){

        // $order_result = $request->pick_place - $request->destination_place;
        // return view('order_result',compact('order_result'));

        $pick_place = Place::findOrFail($request->pick_id);
        $dest_place = Place::findOrFail($request->dest_id);
        $price = $dest_place->place_price - $pick_place->place_price;
        $order = new Order();
        $order->pick_id = $pick_place->id;
        $order->dest_id = $dest_place->id;
        $order->price = abs($price);
        $order->user_id = auth()->user()->id;
        $order->save();
        return view('order_result',compact('order'));



    }


}
