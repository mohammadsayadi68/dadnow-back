@extends('back.index')
@section('content')
    @include('layout.messages')

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>حوزه های شغلی</h5>
                {{-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> --}}
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان حوزه</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $key=> $activity)
                                <tr>
                                    <td> {{ ($activities->currentpage()-1) * $activities->perpage() + $key + 1 }}</td>
                                    <td>{{ $activity->name }}</td>
                                    <td><a type="button" href="" class="btn btn-warning has-ripple "
                                            style="padding:0 3px">حذف</a>
                                        <a type="button" href="" class="btn btn-success has-ripple"
                                            style="padding:0 3px">ویرایش</a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        {{ $activities->links('vendor.pagination.pagination') }}
        </div>
    </div>
@endsection
