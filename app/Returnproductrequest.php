<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returnproductrequest extends Model
{
    public function orderitem()
    {
    	return $this->belongsTo(Orderitem::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
