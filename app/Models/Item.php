<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps=false;
    protected $table='item';
    protected $fillable=([
        'name',
        'type',
        'description',
        'amount',
        'image',
        'mode'
    ]);
}
