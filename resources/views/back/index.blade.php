@extends('back.main')
@section('main')
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    @include('back.parts.nav')

    @include('back.parts.header')




    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <div class="page-header">
                <div class="page-block">
                    {{-- <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Sample Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Sample Page</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>

         @yield('content')

        </div>
    </div>
@endsection
