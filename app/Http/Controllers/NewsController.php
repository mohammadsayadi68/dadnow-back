<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function index(){
        $news=News::orderBy('id', 'DESC')->get();
        return view('back/news/index',compact('news'));

    }
    public function create(){
        $categories=Category::get();
        return view('back/news/create',compact('categories'));

    }
    public function store(Request $request){

        $request->validate([
            'title' =>'required|string|max:100',
            'description' =>'required|string',
            'cover' =>'required|string|max:200',
           'category_id'=>'required|numeric',

        ]);
        $slug=str_replace(' ', '_', $request->title);
        News::create([
                'user_id' => \Auth::id(),
                'title' => $request->title,
                'description' => $request->description,
                'cover' => $request->cover,
                'category_id'=>$request->category_id,
                'slug'=>$slug,
                'status'=>1
            ]);
            return redirect()->route('admin_news')->withSuccess( 'خبر با موفقیت ثبت شد');


    }
    public function edit(News $news)
    { 
        $categories=Category::get();
        return view('back/news/edit',compact('news','categories'));

    }
    public function status(Request $request, News $news)
    {
       $news=News::where('id',$request->id)->first();
       $news->status=!$news->status;
       $news->save();
    //    message(' درخواست شما ثبت شد، کارشناسان ما برای همراهی شما به زودی تماس خواهند گرفت.','success');
       return redirect()->route('admin_news')->withSuccess( 'وضعیت با موفقیت ویرایش شد');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' =>'required|string|max:100',
            'description' =>'required|string',
            'cover' =>'required|string|max:200',
           'category_id'=>'required|numeric',

        ]);
        $news->update([
            'title' =>$request->title,
            'description'=>$request->description,
            'cover' =>$request->cover,
            'category_id'=>$news->category_id
    ]);
       return redirect()->route('admin_news')->withSuccess( 'خبر با موفقیت ویرایش شد');
        
    }
}
