<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
     protected $fillable = [
        'name',
    ]; 

    protected $table = 'owners';
}
