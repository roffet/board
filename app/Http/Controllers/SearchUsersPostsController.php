<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class SearchUsersPostsController extends Controller
{
    public function __invoke($id)
    {
        // ユーザーのidから検索する形でポストを取得
        $user = User::find($id);

        $posts = $user->posts()->get()->sortByDesc('created_at')->paginate();

        return view('user', ['posts' => $posts, 'user' => $user ]);
    }
}
