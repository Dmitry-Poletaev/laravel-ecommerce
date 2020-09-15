<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function childrenOrderProduct()
    {
        return $this->hasMany('App\Models\Admin\OrderProduct');
    }
}
