<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class RefHistoryController extends BaseController
{

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update_ref_history(Request $request)
    {
        // echo "<prE>";print_r($request->all());die;
        update_ref_history($request->user_id,$request->ref_id,$request->description,$request->status,$request->amount);
        return $this->sendResponse('success', 'Data updated success fully.');

    }


}
