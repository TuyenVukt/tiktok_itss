<?php

namespace App\Http\Controllers\TiktokApi;

use App\Events\LoginEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// user models
use App\Models\TiktokApi\Users;
use App\Models\User;

class UserController extends Controller
{

    // load data
    public function loadData(){
        $users = Users::all();
        return response()->json([
            'alert' => 200,
            'data' => $users, 
        ]);
    }

}
