<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'models',
        'year',
        'color',
        'owner_id',
    ]; 

    protected $table = 'cars';

    public function owner()
    {
       return $this->belongsTo('App\Owner', 'id');
    }
}
