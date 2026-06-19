<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public $timesatamps=false;
    public $table="payment";
    public $fillable=([
        'customerid',
        'date',
        'time',
        'amount',
        'utr',
        'status',
    ]);
}
