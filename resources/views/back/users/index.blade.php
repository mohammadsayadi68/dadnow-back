@extends('back.index')
@section('content')
@include('layout.messages')

<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>لیست کاربران</h5>
            <div>تعداد کاربران : {{$users->total ()}} نفر</div>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کاربر</th>
                            <th>سطح دسترسی</th>
                            <th>کارفرما/کارجو</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if ($user->role==1)
                                <label id="user-role{{$user->id}}" data-value='{{$user->id}}'
                                    class="badge badge-light-success user-role">مدیر </label>
                                @else
                                <label id="user-role{{$user->id}}" data-value='{{$user->id}}'
                                    class="badge badge-light-danger user-role">کاربر</label>
                                @endif
                            </td>
                            <td>
                                @if ($user->posters->count())
                                کارفرما
                                @else
                                کار جو
                                @endif
                            </td>
                            <td><a type="button" href="" class="btn btn-warning has-ripple p-0 px-1 ">حذف</a>
                                <a type="button" href="" class="btn btn-success has-ripple p-0 px-1">ویرایش</a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        {{ $users->links('vendor.pagination.pagination') }}
    </div>


</div>
@endsection