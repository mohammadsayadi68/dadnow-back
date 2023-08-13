@extends('back.index')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h3>ویرایش پادکست</h3>
            @include('back.parts.messages')

            <div class="card-body">
                <form action="{{route('admin_podcast_update',$podcast->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group fill">
                                <label class="floating-label" for="Text">عنوان </label>
                                <input class="mb-3 form-control" type="text" name="title"
                                    placeholder="لطفاعنوان پادکست را وارد کنید" value="{{$podcast->title}}">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-group fill">
                                <label class="floating-label" for="Text"> شماره پادکست</label>
                                <input class="mb-3 form-control" type="text" name="part" value="{{$podcast->part}}"
                                    placeholder=" لطفاشماره پادکست را وارد کنید(مثال قسمت دوم)">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> انتخاب فایل صوتی
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="podcast"
                                    value="{{$podcast->audio}}">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                        </div>

                        <div class="col-sm-10">
                            <div class="input-group mt-3">
                                <span class="input-group-btn">
                                    <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> انتخاب کاور
                                    </a>
                                </span>
                                
                                <input id="thumbnail1" class="form-control" type="text" name="cover"
                                    value={{$podcast->cover}}>
                            </div>
                            <img id="holder1" style="margin-top:15px;max-height:100px;">
                        </div>
                        <div class="col-sm-10 mt-3">
                            <div class="form-group fill">
                                <label for="inputState" class="floating-label" for="Text">انتخاب دسته بندی</label>
                                <select id="inputState" name="set_id" class="form-control">
                                    <option value="{{$podcast->set->id}}" selected="">{{$podcast->set->title}}
                                    </option>
                                    @foreach ($sets as $set)

                                    <option value={{$set->id}}>{{$set->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-group fill">
                                <label class="floating-label pb-3" for="Text">نویسنده </label>
                                <input class="mb-3 mt-2 form-control" type="text" disabled name="user"
                                    value="{{auth::user()->name}}">
                            </div>
                        </div>

                        <div class="col-sm-10">
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary has-ripple">ویرایش<span
                                        class="ripple ripple-animate"></span></button>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        $('#lfm').filemanager('file');
        $('#lfm1').filemanager('file');
    </script>
    @endsection