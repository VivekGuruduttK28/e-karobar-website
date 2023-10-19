<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayoutAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'bank_name',
        'account_no',
        'iban',
        'account_title',
    ];
}
