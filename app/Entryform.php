<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entryform extends Model
{
    protected $guarded = [];

    protected $fillable = [
    'firstname',
    'lastname',
    'email',
    'telephone',
    'gender',
    'dob',
    'comments'
    ];


}
