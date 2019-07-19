<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pins extends Model
{
    //
    protected $fillable = [
        'PinCode', 'BatchNo', 'SerialNo','owner','usage'
    ];
}
