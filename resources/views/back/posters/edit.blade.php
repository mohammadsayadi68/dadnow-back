@extends('back.index')
@section('content')
<div class="col-sm-12">
    <div class="card">
        {{-- <div class="card-header">
            <h5>ویرایش آگهی</h5>
            @include('layout.messages')
        </div> --}}
        <div class="card-body">

            <form class="" method="POST" action="{{ route('admin.posters.update',$poster->id) }}">
                @csrf
                <div class="form-group py-3 px-3 d-flex justify-content-between">
                    <span class="form-lable">
                        <i class="fa fa-edit color-grey ml-1 mx-2"></i>
                        ویرایش آگهی استخدام</span>
                    <a href="" class="back-btn p-2 px-4">بازگشت
                        <i class="fa fa-chevron-left mr-1 d-none d-sm-inline-block"></i>
                    </a>
                </div>
                <hr class="marbin-0">
                <div class="form-group py-3 px-4">
                    <h5 for="exampleInputName " class="form-lable">عنوان آگهی:</h5>
                    <input type="text" name="title" required class="form-control" id="exampleInputName"
                        placeholder="انتخاب عنوان شغلی مناسب، مثلا: مدیر مالی" value="{{$poster->title}}">
                </div>

                <div class="row px-4">
                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">دسته‌بندی
                                شغلی:</h5>
                            <select class="form-control" required name="activity_id"
                                aria-label="Default select example">
                                <option>{{$poster->activity->name}}</option>
                                @foreach ($activities as $activity)
                                <option value="{{ $activity->id }}">
                                    {{ $activity->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">انتخاب استان /
                                شهر:</h5>
                            <select class="form-control" required name="city_id" aria-label="Default select example">
                                <option value="{{$poster->city->id }}">{{$poster->city->title}}</option>
                                @foreach ($citis as $city)
                                @php
                                $x = $city->id;
                                $y = $city->title;
                                @endphp
                                <option style="background-color: lightgray" value="{{ $city->id }}">استان
                                    {{ $city->title }} </option>
                                @if ($city->parent == 0)
                                @foreach ($citis as $city)
                                @if ($city->parent == $x)
                                <option value="{{ $city->id }}">
                                    {{ $y }}/{{ $city->title }}
                                </option>
                                @endif
                                @endforeach
                                @if ($x == 31)
                                @php
                                break;
                                @endphp
                                @endif
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row px-4">
                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">نوع
                                همکاری:</h5>
                            <select class="form-control" required name="assist_type"
                                aria-label="Default select example">
                                <option value="{{$poster->assist_type}}" class="" selected> {{$poster->assist_type}}
                                </option>
                                <option value="تمام وقت" class=""> تمام وقت</option>
                                <option value="پاره وقت" class=""> پاره وقت</option>
                                <option value="کارآموزی" class="">کارآموزی</option>
                                <option value="دورکاری" class="">دورکاری</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">حداقل
                                حقوق:</h5>
                            <input type="text" required name="salary" class="form-control personal-select"
                                id="exampleInputName" placeholder="لطفا حقوق مورد نظر را وارد کنید"
                                value="{{$poster->salary}}">
                                <select class="form-control" required name="assist_type"
                                aria-label="Default select example">
                                <option value="{{$poster->assist_type}}" class="" selected> {{$poster->assist_type}}
                                </option>
                                @foreach ($salaries as $salary)
                                    
                                <option value="{{$salary->value}}" class="">{{$salary->title}}</option>
                                @endforeach
                             
                            </select>
                        </div>
                    </div>

                </div>
                <input type="hidden" name="user_id" value="{{Auth::id()}}">

                <div class="form-group py-3 px-3">
                    <h5 for="exampleInputName " class="form-lable">شرح شغل /
                        مسئولیت‌ها:</h5>
                    <h5 for="">شامل: مسئولیت‌ها، شرایط احراز و مزایای شغلی</h5>
                    <textarea id="editor" required name="description"
                        class="form-control">{!! $poster->description !!}</textarea>
                </div>

                <div class="row px-4">
                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">سابقه کار
                                مرتبط:</h5>
                            <select class="form-control" required name="experience" aria-label="Default select example">
                                <option value="{{$poster->experience}}" selected> {{$poster->experience}}
                                </option>
                                <option value="0">مهم نیست</option>
                                <option value="3">کمتراز 3 سال</option>
                                <option value="7">سه تا هفت سال </option>
                                <option value="1">بیشتراز هفت سال</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">حداقل مدرک تحصیلی
                                مورد نیاز :</h5>
                            <select class="form-control" name="degree" aria-label="Default select example">
                                <option value="{{$poster->experience}}" selected> {{$poster->experience}}
                                </option>
                                <option value="1">مهم نیست</option>
                                <option value="2">دیپلم</option>
                                <option value="3">کاردانی</option>
                                <option value="3">کارشناسی ارشد</option>
                                <option value="3">پی اچ دی</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row px-4">
                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">جنسیت :</h5>
                            <select class="form-control" required name="gender" aria-label="Default select example">
                                <option value="1">مهم نیست</option>
                                <option value="2">مرد</option>
                                <option value="3">زن</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group py-3">
                            <h5 for="exampleInputName " class="form-lable">وضعیت خدمت
                                سربازی:</h5>
                            <select class="form-control" required name="soldiering" aria-label="Default select example">
                                <option value="مهم نیست" class="">مهم نیست</option>
                                <option value="پایان خدمت"   <?php if ($poster->soldiering=='پایان خدمت') {
                                    echo ' selected';
                                    } ?> 
                                    >پایان خدمت</option>
                            </select>
                        </div>
                    </div>

                    {{-- <div class="form-group py-3 px-4">
                        <label for="exampleInputName " class="form-lable">تصویر امنیتی:</label>
                        {!! htmlFormSnippet() !!}
                    </div> --}}

                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group py-3 px-2">
                            <h5 for="exampleInputName " class="form-lable">نویسنده:</h5>
                            <input type="text" required name="user_id" class="form-control personal-select px-2"
                                id="exampleInputName" value="{{$poster->user->name}}" disabled>
                        </div>
                    </div>
                </div>

                <div class=" d-flex justify-content-between py-4 bgh">
                    <div class="d-flex flex-column px-4">
                        <button type="submit"
                            class="btn btn-success btn-lg  text-center font-weight-bold float-left ">ذخیره
                            <i class="fa fa-arrow-left mr-2"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection