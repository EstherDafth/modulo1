<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    //
    public function showResetForm(){
        return view('ResetPasswordViews.recuperacioncontrasennia');
    }

}
