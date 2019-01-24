<?php

namespace AdminPanel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmailAvailableController extends Controller
{
    public function check(Request $request)
    {
        if($request->get('email'))
        {
            $email = $request->get('email');
            $data = DB::table('users')
                ->where('email', $email)
                ->count();
            if($data > 0)
            {
                return response()->json(['msg' => 'false']);
            }
            else
            {
                return response()->json(['msg' => 'true']);
            }
        }
    }
}
