<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $users = [
            [
                'name' => 'alex',
                'age' => 30
            ],
            [
                'name' => 'putri',
                'age' => 29
            ],
        ];
        return view(
            "profile",
            [
                'users' => $users
            ]
        );
    }
}
