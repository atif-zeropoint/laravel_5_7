<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome',
            [
                'tasks' => [
                    'Go to store',
                    'Go to markete',
                    'Go to work',
                ],
                'foo'   => 'bar',
                'title' => request('title'),
            ]
        );
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
