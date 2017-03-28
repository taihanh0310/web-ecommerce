<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;
use App\ProductImage;

/**
 * https://www.youtube.com/watch?v=RpG_uCtlsGA&index=61&list=PLxx5KpGCf9ODzvb6MPbWWM9FVKw36iVK5
 */
class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name', 'alias','price', 'intro','content', 'image', 'keywords', 'description', 'user_id', 'category_id'
    ];
    
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
