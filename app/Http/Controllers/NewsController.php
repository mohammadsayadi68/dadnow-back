<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        return view('back/news/index');

    }
    public function create(){
        return view('back/news/create');

    }
    public function store(Request $request){

        $request->validate([
            'title' =>'string|max:100',
            'description' =>'string',
            'cover' =>'string|max:200',
        ]);
        $slug=str_replace(' ', '_', $request->title);
        News::create([
                'user_id' => \Auth::id(),
                'title' => $request->title,
                'description' => $request->description,
                'cover' => $request->cover,
                'slug'=>$slug,
                'status'=>1
            ]);
        return view('back/news/index');

    }
}
