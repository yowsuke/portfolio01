<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchmake extends Model
{
    protected $fillable = [
                'name',
                'teamname',
                'area',
                'category',
                'age',
                'introduce',
                'email',
                'image',
            ];
}
