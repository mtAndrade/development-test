<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Order extends Model
{
    use Rememberable;

    protected $table = "orders";
    protected $guarded = ["updated_at", "deleted_at", "created_at", "id"];

    public function products(){
        return $this->belongsToMany(Product::class, 'orders_x_products','order_id','product_id')->withPivot(['quantity']);
    }

    public function createRandom(){
        $order = new Order([
            "total_value" => 0,
            "tracking_code" => strtoupper(str_random(10))
        ]);
        $order->save();

        $possibleProducts = Product::where('in_stock','>',0)->get();
        $numberOfProducts = rand(1,$possibleProducts->count());

        $orderProducts = $possibleProducts->shuffle()->take($numberOfProducts);

        foreach ($orderProducts as $product){
            $quantity= rand(1,10);
            $product->in_stock -= $quantity;

            $product->save();

            $order->products()->attach($product->id,['quantity' => $quantity]);

            $order->total_value += $product->price * $quantity;
        }
        $order->save();
    }
}
