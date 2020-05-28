<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = ['image_url', 'name', 'desc', 'price_eur'];

    protected $hidden = ['updated_at', 'created_at'];

}
