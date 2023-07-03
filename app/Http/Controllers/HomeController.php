<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $posts = [
            [
                'id' => 1,
                'title' => 'Tieu de 1',
                'desc' => 'Mo ta 1',
                'status' => 1
            ],
            [
                'id' => 2,
                'title' => 'Tieu de 2',
                'desc' => 'Mo ta 2',
                'status' => 1
            ],
            [
                'id' => 3,
                'title' => 'Tieu de 3',
                'desc' => 'Mo ta 3',
                'status' => 0
            ]
        ];

        return view('home', compact('posts'));
    }
}
