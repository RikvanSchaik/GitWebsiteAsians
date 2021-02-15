<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageManager extends Controller
{
     public function index(){
         $title = "Welcome to the Asians";
         return view('pages.index')->with('title', $title);
     }

     public function about(){
        $title = "About us";
        return view('pages.about')->with('title', $title);
    }

    public function posts(){
        $title = "posts";
        return view('pages.posts')->with('title', $title);
    }

    public function rules(){
        $data = array(
            'title' => 'rules',
            'rules' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.rules')->with($data);
    }
}
