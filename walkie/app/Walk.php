<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walk extends Model
{
    public function scopeDay($query, $date)
    {

        return $query->where('date', '=', $date);
    }

    public static function getHoursForDay($date)
    {
        $allHours = ['12', '14', '16', '18'];
        if($date == date('Y-m-d')){
            $allHours = array_filter($allHours, function($hour){
                return $hour > date('G');
            });
        } elseif ($date < date('Y-m-d')){
            return [];
        }
        return $allHours;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
