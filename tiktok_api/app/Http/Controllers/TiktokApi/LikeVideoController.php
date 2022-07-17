<?php

namespace App\Http\Controllers\TiktokApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use model
use App\Models\TiktokApi\LikeVideos;
use Illuminate\Support\Facades\DB;

class LikeVideoController extends Controller
{
    //
    public function save_like(Request $request){
        $like = new LikeVideos();
        $like->user_id = $request->user_id;
        $like->video_id = $request->video_id;
        $like->status = 1;
        $like->save();
        return response()->json([
            'alert' => 200,
        ]);
    }

}
