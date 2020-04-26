<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $fillable = ['content'];

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
