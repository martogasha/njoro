<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function counter(){
        return $this->belongsTo(Counter::class);
    }
    public function property(){
        return $this->belongsTo(Property::class);
    }
}
