<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SetCollection;
use App\Http\Resources\SetResource;
use App\Http\Resources\PodcastResource;

use Illuminate\Http\Request;
use App\Models\Set;

class SetController extends Controller
{
    public function index(){

        $sets=Set::with(['podcasts']);
        return SetResource::collection( $sets->get())->Response();
    }

    public function show($id){
        return new SetResource(Set::findOrFail($id));
    }

    
}
