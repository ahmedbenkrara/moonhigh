<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class sale extends Model
{
    use HasFactory;
    protected $table = 'sale';
    protected $primarykey  = 'id';
    protected $fillable = [
        'product_id', 'price'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
