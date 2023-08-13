@extends('back.index')
@section('content')
@include('back.parts.messages')


<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>مدیریت پادکستها</h5>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>دسته بندی </th>
                            <th> عنوان</th>
                            <th>قسمت </th>
                            <th>وضعیت نمایش</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($podcasts as $podcast)

                        <tr>
                            <td>{{$podcast->id}}</td>
                            <td>{{$podcast->set->title}}</td>
                            <td>{{$podcast->title}}</td>
                            <td>{{$podcast->part}}</td>
                            <td>
                                @if ($podcast->status)
                                <a href={{route('admin_podcast_status',$podcast->id)}}>
                                    <span class="badge badge-info">فعال</span>
                                </a>

                                @else
                                <a href={{route('admin_podcast_status',$podcast->id)}}>
                                    <span class="badge badge-danger">غیرفعال</span>
                                </a>



                                @endif
                            </td>

                            <td>
                                <a href={{route('admin_podcast_edit',$podcast)}} class="btn  btn-primary
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