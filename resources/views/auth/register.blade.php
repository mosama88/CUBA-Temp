@extends('dashboard.layouts.authentication.master')
@section('title', 'Sign-up')

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
                        <div><a class="logo" href="{{ route('index') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/login.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form needs-validation" novalidate="" method="POST"
                                action="{{ route('register') }}">
                                @csrf

                                <h4 class="text-end">إنشاء حساب</h4>
                                <p class="text-end">أدخل بياناتك الشخصية لإنشاء الحساب</p>
                                <div class="form-group">
                                    <label class="col-12 form-label text-end pt-0 text-end">الأسم</label>
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <input class="form-control text-end" name="name" type="text"
                                                required="" placeholder="أكتب الاسم">
                                            @error('name')
                                                <div class="alert alert-danger p-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
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
                                    <input name="password" class="form-control" type="password" required=""
                                        placeholder="*********">
                                    @error('password')
                                        <div class="alert alert-danger p-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-12 form-label text-end">تأكيد كلمة المرور</label>
                                    <input name="password_confirmation" class="form-control" type="password"
                                        name="login[password]" required="" placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                    @error('password_confirmation')
                                        <div class="alert alert-danger p-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-0" dir="rtl">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">اتفق مع <a class="ms-2"
                                                href="#">سياسة الخصوصية</a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">إنشاء حساب</button>
                                </div>

                                <p class="mt-4 mb-0" dir="rtl">هل لديك حساب؟<a class="ms-2"
                                        href="{{ route('login') }}">الدخول</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
