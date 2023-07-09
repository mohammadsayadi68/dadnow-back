@extends('back.index')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>دسته بندی شغلی جدید</h5>
                @include('layout.messages')
            </div>
            <div class="card-body">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group fill">
                                <label class="floating-label" for="Text">نام دسته بندی</label>
                                <input class="mb-3 form-control" type="text" name="name" placeholder="لطفا نام دسته بندی را وارد کنید">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary has-ripple"> ذخیره دسته بندی<span
                                        class="ripple ripple-animate"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
