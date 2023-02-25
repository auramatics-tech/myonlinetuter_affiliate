<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReferralId extends Model
{
    use HasFactory;
    protected $table = 'user_referral_ids';
    protected $fillable = [
        'user_id ',
        'referral_id',
        'status'
    ];
}
