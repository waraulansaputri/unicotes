@extends('templates.auth')
@section('content')
<div id="login-page">
<div class="container">
    <form class="form-login" method="POST" action="{{ route('login') }}">
        <h2 class="form-login-heading">TES UNICO</h2>
            @csrf
            <div class="login-wrap">
                <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('Alamat Email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>

                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>

                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>
                  <select name="level" class="form-control">
                    <option >Pilih Level</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Admin">Admin</option>
                  </select>
                <br>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                    {{ __('Ingat Saya') }}
                    </label>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                    </a>
                    @endif
                    <br>
                    <button type="submit" class="btn btn-theme btn-block"><i class="fa fa-lock"></i>
                        {{ __('Masuk') }}
                    </button>
                    <br>
                    <center>Atau</center>
                    <br>
                    <a href="/welcome" type="button" class="btn btn-theme btn-block"><i class="fa fa-home"></i>
                        {{ __('Beranda') }}
                    </a>
                    <hr>
                    <div class="registration">
                        Belum Memiliki Akun ?<br/>
                        <a href="{{ route('register') }}">
                            Buat Akun 
                        </a>
                    </div>

            </div>
    </form>
</div>
</div>

@endsection
