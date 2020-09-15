<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function children()
    {
        return $this->hasMany('App\Models\Admin\Subcategory');
    }
    
    public function childrenProduct()
    {
        return $this->hasMany('App\Models\Admin\Product');
    }
}
