<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'text',
        'user_id',
        'dog_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function votes()
    {
        return $this->hasMany('\App\Vote');
    }

    public function positiveVotes()
    {
        return $this->votes()->where('vote', true)->count();
    }

    public function negativeVotes()
    {
        return $this->votes()->where('vote', false)->count();
    }

}
