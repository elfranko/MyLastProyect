<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edad extends Model
{
    protected $fillable = [
        'type', 'timeBarrica', 'timeBotella' , 'totalTime'
    ]
}
