<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display the specified resource.
     * @param User $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {

        $user_data = User::findOrFail($id)->with('comments')->first();

        if ($user_data != null) {

            return view('user.card')->with(['user' => $user_data]);
        }
    }
}
