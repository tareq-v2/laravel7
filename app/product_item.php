<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_item extends Model
{
    protected $table ='product_items';

    protected $fillable =['id','item_name','image'];
}
