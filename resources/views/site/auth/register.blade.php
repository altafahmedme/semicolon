@extends('site.auth.master')

@section('auth-title')
    @lang('messages.register')
@endsection

@section('auth-content')

    <div class="row">
        <div class="col-lg-7 mx-auto">
            <blockquote class="blockquote">Please read <a href="#">Licensing & Terms</a> of Use if you are wondering
                about the license. </strong></blockquote>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 mx-auto">
            @include('site.partials.errors')
            <form class="form-wrapper" action="{{ route('auth.register') }}" method="post">
                @csrf
                <h4>@lang('messages.register')</h4>
                <input type="text" name="username" id="username" required class="form-control" placeholder="Username">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Email address">
                <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="form-control" placeholder="Password Confirmation">
                <div class="mb-3">
                    <a href="{{ route('auth.login.form') }}">Already you have an account? </a>
                </div>

                <button type="submit" class="btn btn-primary">
                    @lang('messages.register') <i class="fa fa-envelope-open-o"></i>
                </button>
            </form>
        </div>
    </div>
@endsection
