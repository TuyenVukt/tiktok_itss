<?php

namespace App\Http\Controllers\TiktokApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use models

use App\Models\TiktokApi\LikeComments;
use Illuminate\Support\Facades\DB;

class LikeCommentController extends Controller
{
    // 
    public function save_like(Request $request){
        $like_cmt = new LikeComments();
        $like_cmt->status = $request->status;
        $like_cmt->user_id = $request->user_id;
        if ($request->status == 1){
            $like_cmt->comment_id = $request->comment_id;
        }
        else{
            $like_cmt->reply_id = $request->reply_id;
        }
        $like_cmt->save();
        return response()->json([
            'alert' => 200,
        ]);
    }


    public static function check_cmt($user_id, $comment_id){
        if (DB::table('like_comments')->where('user_id', $user_id)->where('comment_id', $comment_id)->exists()) {
            return 1;
        }
        else return 0;
    }


    public static function check_rep($user_id, $reply_id){
        if (DB::table('like_comments')->where('user_id', $user_id)->where('reply_id', $reply_id)->exists()) {
            return 1;
        }
        else return 0;
    }

}
