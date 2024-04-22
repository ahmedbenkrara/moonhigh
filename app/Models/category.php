<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primarykey  = 'id';
    protected $fillable = ['name'];

    public function products(){
        return $this->belongsToMany(Product::class, 'product_category');
    }
}
