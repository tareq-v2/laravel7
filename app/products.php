<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table ='products';
    protected $fillable = ['id', 'product_name', 'item_id', 'categroy_id', 'sale_price',  'old_price', 'description', 'image'];
}
