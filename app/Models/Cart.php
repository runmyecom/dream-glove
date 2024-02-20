<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_name','product_price', 'quantity', 'product_id', 'user_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
