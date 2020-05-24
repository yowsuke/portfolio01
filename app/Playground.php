<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playground extends Model
{
    protected $fillable = [
                'name',
                'pref',
                'area',
                'tel',
                'url',
                'open',
                'fee',
                'parking',
                'image'
            ];
}
