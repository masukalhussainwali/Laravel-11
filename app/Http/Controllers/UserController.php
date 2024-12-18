<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(): void
    {
        $users = User::with('posts')->get();

        foreach ($users as $user) {
            echo 'User Name: ' . $user->name . '<br>';
                foreach ($user->posts as $post) {
                    echo 'Title: ' .  $post->title . '<br>';
                }
        }
    }
}
