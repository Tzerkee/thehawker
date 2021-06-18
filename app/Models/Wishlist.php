<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlist';

    protected $fillable = ['user_id','product_id'];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}