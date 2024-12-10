<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvisionServer extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        error_log("hi there");
        return [
            'msg'=>'hi server is running'
        ];
    }
}
