<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountDetail extends Model
{
    use HasFactory;
    protected $table = 'users_account_details';
    protected $fillable = [
        'user_id ',
        'payout_type',
        'account_name',
        'account_no',
        'account_type',
        'bank_name',
        'branch_code',
        'routing_number',
        'swift_code'
    ];
}
