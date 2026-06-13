<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps=false;
    protected $table="offer";
    protected $fillable=([
        'title',
        'description',
        'discount',
        'offercode',
        'startdate',
        'enddate'
    ]);
}
