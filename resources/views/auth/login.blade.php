@extends('dashboard.layouts.authentication.master')
@section('title', 'Login')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="{{ route('dashboard') }}"><img class="img-fluid for-light"
                                    src="{{ asset('dashboard/assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('dashboard/assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form needs-validation" novalidate="" method="POST"
                                action="{{ route('login') }}">
                                @csrf
                                <h4 class="text-end">تسجيل الدخول إلى الحساب</h4>
                                <p class="text-end">أدخل بريدك الإلكتروني وكلمة المرور لتسجيل الدخول</p>
                                <div class="form-group">
                                    <label class="col-12 form-label text-end">البريد الالكترونى</label>
                                    <input class="form-control" name="email" type="email" required=""
                                        placeholder="Test@gmail.com">
                                    @error('email')
                                        <div class="alert alert-danger p-2">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label class="col-12 form-label text-end">كلمة المرور</label>
                                    <input class="form-control" name="password" type="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                    @error('password')
                                        <div class="alert alert-danger p-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" name="remember" type="checkbox">
                                        <label class="text-muted" for="checkbox1">تذكرنى</label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        {{-- <a class="link" href="{{ route('forget-password') }}">هل نسيت كلمة السر؟</a> --}}
                                    @endif


                                    <div class="form-group mb-0 my-3" dir="rtl">
                                        <button class="btn btn-primary btn-block" type="submit">الدخول</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
