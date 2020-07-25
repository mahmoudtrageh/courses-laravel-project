<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentInfo extends Model
{
    protected $fillable = [

        'method',
        'sender',
        'account_number',
        'bank_name',
        'paid_status',
        'email',

    ];

    public $table = "payment_infos";
}
