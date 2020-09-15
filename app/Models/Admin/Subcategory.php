<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'category_id', 'name',
    ];

    public function parent()
    {
        return $this->belongsTo('App\Models\Admin\Category', 'category_id');
    }

    public function childrenProduct()
    {
        return $this->hasMany('App\Models\Admin\Product');
    }

}
