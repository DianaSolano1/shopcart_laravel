<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    // relacion al usuario
    public function user(){
        return $this->belongsTo('App\User');
    }

    // relacion a los productos
    public function products() {
        return $this->belongsToMany('App\Product')
            -withPivot('quantity');
    }
}
