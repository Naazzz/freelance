<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    protected $fillable = [
        'user_id','name', 'email', 'password', 'type'
    ];
   

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
