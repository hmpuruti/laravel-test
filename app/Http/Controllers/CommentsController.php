<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * @return string
     * Comment posting method
     * handles request from api and validate and store comment to model
     */
    public function comment()
    {

        request()->validate([
            'password' => 'required|string',
            'id'       => 'required|integer',
            'comments' => 'required|string',
        ]);

        $user = User::findOrFail(request()->id)->with('comments')->first();

        if (request()->password == '720DF6C2482218518FA20FDC52D4DED7ECC043AB') {
            $comment          = new Comment;
            $comment->comment = request()->comments;
            $comment->user_id = $user->id;
            $comment->save();
            return 'Ok';
        } else {
            abort(401, 'Invalid password');
        }
    }
}
