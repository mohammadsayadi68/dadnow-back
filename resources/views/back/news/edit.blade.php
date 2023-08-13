@extends('back.index')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>ایجاد بلاگ جدید</h5>
           @include('back.parts.messages')

        </div>
        <div class="card-body">
            <form action="{{route('admin_news_update',$news)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group fill">
                            <label class="floating-label" for="Text">عنوان </label>
                            <input class="mb-3 form-control" type="text" name="title"
                                placeholder="لطفاعنوان خبر را وارد کنید" value={{$news->title}}>
                        </div>
                    </div>
                    <div class="col-sm-10 mt-3">
                        <div class="form-group fill">
                            <label for="inputState" class="floating-label" for="Text">انتخاب دسته بندی</label>
                            <select id="inputState" name="category_id" class="form-control">
                                <option value="{{$news->category->id}}" selected="">{{$news->category->title}}
                                </option>
                                @foreach ($categories as $category)

                                <option value={{$category->id}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group fill">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> انتخاب تصویر
                                    </a>
                                </span>
                                <input id="image" class="form-control" type="text" name="cover" value={{$news->cover}}>
                            </div>
                            <img id="image" style="margin-top:15px;max-height:100px;">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group fill">
                            <textarea class="my-editor" name="description" id="" cols="30" rows="10">{{$news->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group fill">
                            <label class="floating-label" for="Text">نویسنده </label>
                            <input class="mb-3 form-control" type="text" name="user"
                                value="{{auth::user()->name}}">
                        </div>
                    </div>

                    <div class="col-sm-10">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary has-ripple">ذخیره<span
                                    class="ripple ripple-animate"></span></button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection