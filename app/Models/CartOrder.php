<?php

namespace App\Models;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Notifiable;

class CartOrder extends Model
{
    use HasFactory;
    protected $table = "cart__orders";
    protected $fillable = [
        'cart_id','quantity','product_id','sub_total'
    ];
    public function cart()
    {
        return $this->belongsTo(Cart::class,'cart_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
