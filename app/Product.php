<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Rememberable\Rememberable;

class Product extends Model
{
    use Rememberable;

    protected $table = "products";
    protected $guarded = ["updated_at", "deleted_at", "created_at", "id"];

    public function orders(){
        return $this->belongsToMany(Order::class, "orders_x_products", "product_id", "order_id")->withPivot(['quantity']);
    }
}
