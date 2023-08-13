<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Set;
use App\Models\Podcast;
use Redirect;
class PodcastController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        $podcasts=Podcast::orderBy('id','DESC')->get();
        return view('back/podcast/index',compact('podcasts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sets=Set::get();
        return view('back/podcast/create',compact('sets'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get file extetion

        $podcaset_extention=substr($request->podcast,-3);
        $cover_extention=substr($request->cover,-3);
       if ($podcaset_extention!='mp3') {
        return Redirect::back()->withErrors(['msg' => 'فرمت فایل پادکست صحیح نیست']);
       }elseif ($cover_extention!='jpg'&&$cover_extention!='png'&&$cover_extention!='peg') {
        return Redirect::back()->withErrors(['msg' => 'فرمت فایل کاور صحیح نیست']);


       }

       $request->validate([
           'title' =>'required|string|max:100',
           'part'=>'required|string|max:50',
           'podcast' =>'required|string|max:200',
           'cover' =>'required|string|max:100',
           'set_id'=>'required|numeric',

        ]);

        Podcast::create([
                'user_id' => \Auth::id(),
                'title' => $request->title,
                'part' => $request->part,
                'cover' => $request->cover,
                'audio'=>$request->podcast,
                'set_id'=>$request->set_id,
                'status'=>1
            ]);
            
            return redirect()->route('admin_podcast')->withSuccess( 'پادکست با موفقیت ثبت شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    { 
        $sets=Set::get();
        return view('back/podcast/edit',compact('podcast','sets'));

    }
    public function status(Request $request, Podcast $podcast)
    {
       $podcast=Podcast::where('id',$request->id)->first();
       $podcast->status=!$podcast->status;
       $podcast->save();
    //    message(' درخواست شما ثبت شد، کارشناسان ما برای همراهی شما به زودی تماس خواهند گرفت.','success');
       return redirect()->route('admin_podcast')->withSuccess( 'وضعیت با موفقیت ویرایش شد');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcast $podcast)
    {
        $request->validate([
           'title' =>'required|string|max:100',
           'part'=>'required|string|max:50',
           'podcast' =>'required|string|max:200',
           'cover' =>'required|string|max:100',
           'set_id'=>'required|numeric',

        ]);
        $podcast->update([
            'title' =>$request->title,
            'part'=>$request->part,
            'audio' =>$request->podcast,
            'cover' =>$request->cover,
            'set_id'=>$podcast->set_id
    ]);
       return redirect()->route('admin_podcast')->withSuccess( 'پادکست با موفقیت ویرایش شد');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }

}