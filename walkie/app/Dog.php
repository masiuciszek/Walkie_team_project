<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = 'dogs';
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
}
