<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //

    protected $fillable = [
        'order_id', 'payer_id', 'email_address','amount','payment_status','create_time'
    ];
}
