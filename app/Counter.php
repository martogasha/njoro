<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function property(){
        return $this->belongsTo(Property::class);
    }
}
