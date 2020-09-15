<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_products';

    public function parentOrder()
    {
        return $this->belongsTo('App\Models\Admin\Order', 'order_id');
    }
}
