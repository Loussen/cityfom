@extends('admin.layouts.login')
@section('content')
    <form class="login-form" action="{{ route('subAdminLoginPost') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="text-center mb-3">
                <img src="{{asset("admin/img/logo_blue.png")}}" alt="" style="height: 7rem;">
            </div>
            @if(session('message'))
                <div class="alert alert-{{ session('type') }} border-0 alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    {{ session('message') }}
                </div>
            @endif
            <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" placeholder="{{ __('admin.email') }}">
                <div class="form-control-feedback">
                    <i class="icon-user text-muted"></i>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                       placeholder="{{ __('admin.password') }}">
                <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <img class='img-responsive' src="{{ captcha_src('admin') }}"/>
            <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha"
                       placeholder="Kodu daxil edin">
                <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                </div>
                @error('captcha')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <div class="form-group d-flex align-items-center">
                <div class="form-check mb-0">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" name="remember" id="remember" class="form-input-styled"
                               checked data-fouc {{ old('remember') ? 'checked' : '' }}>
                        {{ __('admin.remember_me') }}
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">{{ __('admin.login') }} <i
                        class="icon-circle-right2 ml-2"></i></button>
            </div>
        </div>
    </form>
@endsection
