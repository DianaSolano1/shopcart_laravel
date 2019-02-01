<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    // relacion a las compras
    public function purchases() {
        return $this->belongsToMany('App\Purchase');
    }
}
