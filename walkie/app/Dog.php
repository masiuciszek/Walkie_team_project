<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dog extends Model
{
    
    protected $fillable = [
        'name',
        'age',
        'sex',
        'breed_id',
        'description',
        'image'
    ];

    public function breed()
    {
        return $this->belongsTo('\App\Breed');
    }

    public function users()
    {
        return $this->belongsToMany('\App\User', 'walks');
    }

    public function walks(){
        return $this->hasMany('App\Walk');
    }
}
