<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('created_at','desc')
            ->with(['products' => function($q){ $q->remember(30); }])
            ->remember(30)
            ->get();
        return view('order.index')->with('orders',$orders);
    }
}
