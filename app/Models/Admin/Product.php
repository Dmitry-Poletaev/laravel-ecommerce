<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Admin\Category', 'category_id');
    }

    public function parentSubcat()
    {
        return $this->belongsTo('App\Models\Admin\Subcategory', 'subcategory_id');
    }

    public function parentBrand()
    {
        return $this->belongsTo('App\Models\Admin\Brand', 'brand_id');
    }
}
