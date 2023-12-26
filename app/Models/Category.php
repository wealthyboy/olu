<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\HasChildren;

class Category extends Model
{
    use HasChildren;

    protected $fillable = ['category_name', 'description', 'slug', 'parent_id', 'sort_order', 'allow'];


    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->where('allow', 1);
    }

    public function discount()
    {
        return $this->hasOne('App\Discount');
    }


    public function product_variations()
    {
        return $this->belongsToMany('App\ProductVariation');
    }

    public function attributes()
    {
        return $this->belongsToMany('App\Attribute')
            ->withPivot('id');
    }

    public function parent_attributes()
    {
        return $this->belongsToMany('App\Attribute')
            ->wherePivot('parent_id', null)
            ->withPivot('id');
    }


    public function check($collections, $id)
    {
        foreach ($collections as $collection) {
            if (null !== $collection->id && $collection->id == $id) {
                return $collection->id;
            }
        }
        return false;
    }



    public function getRouteKeyName()
    {
        return 'slug';
    }
}
