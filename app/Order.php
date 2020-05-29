<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    // Pizzas relation
    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza')->withPivot('count');
    }
}
