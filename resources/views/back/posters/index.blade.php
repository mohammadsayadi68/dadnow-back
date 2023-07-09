@extends('back.index')
@section('content')
@include('layout.messages')

<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5>مدیریت آگهی ها</h5>
        </div>
        <div class="card-body table-border-style">
            <button id="esperar" class="btn btn-secondary has-ripple font-weight-900 m-b-10 float-left">منتظر فعال سازی</button>
            <div class="table-responsive" id="poster_table">
               @include('back.posters.poster-table')
            </div>
        </div>
    </div>
</div>
@endsection