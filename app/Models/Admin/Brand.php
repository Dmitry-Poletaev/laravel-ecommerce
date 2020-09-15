<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'logo',
    ];

    public function childrenProduct()
    {
        return $this->hasMany('App\Models\Admin\Product');
    }
}
