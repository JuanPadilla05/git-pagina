<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverie extends Model
{
    protected $fillable = [
        'recipient_name','dni','address','date_delivery'
    ];
}
