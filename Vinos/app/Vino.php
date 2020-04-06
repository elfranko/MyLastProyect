<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
   protected $fillable = [
       'name', 'id_edad', 'id_color', 'id_azucar', 'id_gradoAl', 'img'
   ]
}
