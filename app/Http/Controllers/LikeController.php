<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use App\Model\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }



    public function likeIt(Comment $comment)
    {
        $comment ->like()->create([
            //'user_id' => auth()->id()
            'user_id' => '1'
        ]);
    }

    public function unLikeIt(Comment $comment)
    {
        //$comment->like()->where(['user_id', auth()->id()])->first()->delete();
        $comment->like()->where('user_id', '1')->first()->delete();
    }

}
