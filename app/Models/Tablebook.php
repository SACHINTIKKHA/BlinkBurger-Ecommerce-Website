<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tablebook extends Model
{
    public $timestamps = false;
    protected $table = 'booktable';
    protected $fillable=[
        'firstname',
        'lastname',
        'email',
        'dob',
        'password',
        'confirm',
        'pincode',
        'address',
        'gender',
        'contact',
        'city'
    ];
}
