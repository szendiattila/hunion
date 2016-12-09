<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'intro', 'description', 'packings'];
}
