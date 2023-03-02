<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralHistory extends Model
{
    use HasFactory;
    protected $table = 'referral_history';
    protected $fillable = [
        'refral_ids ',
        'user_id ',
        'descriptions',
        'amount',
        'status',
    ];
}
