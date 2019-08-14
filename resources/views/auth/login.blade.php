@extends('layouts.app')

@section('content')
<main class="container">
    <div class="card text-center col-md-5 mx-auto">
        <div class="card-title font-weight-bold mt-2 pt-2">Masuk</div>
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">Akun Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
                        </label>
                    </div>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Masuk
                        </button>
                        <br>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Anda lupa password?
                        </a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
