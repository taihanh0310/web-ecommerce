<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = [
        'name', 'alias','order', 'parent_id','keywords', 'description'
    ];
    
    /**
     * Relationship
     */
    public function products(){
        return $this->hasMany(Product::class, 'product_id', 'id');
    }
}
