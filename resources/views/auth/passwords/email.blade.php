@extends('templates.auth')
@section('content')
<div id="reset-page">
    <div class="container">
        <form class="form-reset" method="POST" action="{{ route('password.email') }}">
            <h2 class="form-reset-heading">Reset Password</h2>

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                {{ session('status') }}
                </div>
                @endif

                @csrf
                <div class="reset-wrap">
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-theme btn-reset"><i class="fa fa-envelope"></i>
                        {{ __(' Kirim Link Reset Password') }}
                    </button>
                </div>

                </div>
                </div>
                </div>
        </form>
    </div>
</div>
@endsection
