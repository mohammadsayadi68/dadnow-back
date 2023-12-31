@extends('back.index')
@section('content')
@include('back.parts.messages')

<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>مدیریت خبرها</h5>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> دسته بندی</th>
                            <th> عنوان</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category->title}}</td>
                            <td>{{$item->title}}</td>
                            <td>
                                @if ($item->status)
                                <a href={{route('admin_news_status',$item->id)}}>
                                    <span class="badge badge-info">فعال</span>
                                </a>

                                @else
                                <a href={{route('admin_news_status',$item->id)}}>
                                    <span class="badge badge-danger">غیرفعال</span>
                                </a>



                                @endif
                            </td>

                            <td>
                                <a href={{route('admin_news_edit',$item)}} class="btn  btn-primary
                                    has-ripple">ویرایش</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection