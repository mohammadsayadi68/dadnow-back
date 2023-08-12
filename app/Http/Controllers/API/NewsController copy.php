<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsCollection;
use App\Http\Resources\NewsResource;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        // $newses=News::all();
        // return $newses; 
        return new NewsCollection(News::where('category_id','1')->orderBy('id', 'DESC')->take(2)->get());
        // return NewsResource::collection(News::with('user')->paginate(25));
    }

    public function show($id){
        return new NewsResource(News::findOrFail($id));
    }

    
}
