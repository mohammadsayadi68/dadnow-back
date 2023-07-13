@extends('back.main')
@section('main')
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            {{-- <div class="card">
                                <div class="card-header">{{ __('فرم ثبت نام') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('نام
                                                کامل') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{
                                                __('موبایل') }}</label>

                                            <div class="col-md-6">
                                                <input id="phone" type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    name="phone" value="{{ old('phone') }}" required
                                                    autocomplete="email">

                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{
                                                __('کلمه عبور') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{
                                                __('تکرار کلمه عبور' ) }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('ثبت نام') }}
                                                </button>

                                                <a class="btn btn-secodary" href="{{ route('login') }}">
                                                    قبلا ثبت نام کرده ام
                                                </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div> --}}
                            <div class="card">
                              <div class="p-4 m-4">در حال حاضر امکان ثبت نام وجود ندارد</div>
                              <a class="btn btn-primary" href="{{ route('login') }}">
                                  قبلا ثبت نام کرده ام
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

    </div>
</div>
@endsection