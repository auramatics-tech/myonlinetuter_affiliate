<?php

use App\Models\ReferralHistory;

if (!function_exists('update_ref_history')) {
    function update_ref_history($user_id='',$ref_id,$des,$status,$amount='')
    {
        $ref_history = new ReferralHistory();
        $ref_history->user_id = (isset($user_id) && $user_id != '') ? $user_id : NULL;
        $ref_history->refral_ids = $ref_id;
        $ref_history->descriptions = $des;
        $ref_history->status = $status;
        $ref_history->amount = (isset($amount) && $amount != '') ? $amount : NULL;
        $ref_history->save();
    }
}
