<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'email', 'order', 'product_id'];
}
