<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PodcastCollection;
use App\Http\Resources\PodcastResource;

use Illuminate\Http\Request;
use App\Models\Podcast;

class PodcastController extends Controller
{
    public function index(){
        // $newses=News::all();
        // return $newses; 
        return new PodcastCollection(Podcast::get());
        // return NewsResource::collection(News::with('user')->paginate(25));
    }

    public function show($id){
        return new PodcastResource(Podcast::findOrFail($id));
    }

    
}
