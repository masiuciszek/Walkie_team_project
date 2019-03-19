<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walk extends Model
{
    public function scopeDay($query, $date)
    {

        return $query->where('date', '=', $date);
    }
}
