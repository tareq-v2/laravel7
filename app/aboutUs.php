<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutUs extends Model
{
    protected $table ='about_us';

    protected $fillable =['id','description'];
}
