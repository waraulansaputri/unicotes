@extends('templates.auth')
@section('content')
<div id="register-page">
    <div class="container">
        <form class="form-register" method="POST" action="{{ route('register') }}">
            <h2 class="form-register-heading">Daftar Akun TES UNICO</h2>

            @csrf
            <div class="register-wrap">
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

              <div class="col-md-7">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Email') }}</label>

              <div class="col-md-7">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-7">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

              <div class="col-md-7">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
              </div>

              <div class="form-group row">
                <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Daftar Sebagai') }}</label>

                <div class="col-md-7">
                  <select name="level" class="form-control" id="select-level">
                    <option value="">-Pilih Level-</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Admin">Admin</option>
                  </select> 
                </div>                
              </div> 
              <div id="bp/nip" class="form-group row">
                <label for="bp" class="col-md-4 col-form-label text-md-right">{{ __('NO BP/NIP') }}</label>
                <div class="col-md-7">
                    <input name="bp_nip" type="text" class="form-control" placeholder="" >
                </div>
              </div>
              <div class="form-group row" id="hak_akses">
                <label class="col-md-4 col-form-label text-md-right" for="hak_akses">{{ __('Hak Akses') }}</label>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="hak_akses" id="hak_akses" value="Pending" checked="" required autocomplete="hak_akses" > Pending <i class="input-helper"></i>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="hak_akses" id="hak_akses" value="Aktif" required autocomplete="hak_akses"> Aktif <i class="input-helper"></i>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
              </div>    
              <br>
              
              <div class="form-group row mb-0">
                <div class="col-md-11 offset-md-4">
                    <button type="submit" class="btn btn-theme btn-block btn-register"><i class="fa fa-user-plus"></i>
                        {{ __('Daftar') }}
                    </button>
                </div>
              </div>
              <hr>

              <div class="login"><center>Sudah Memiliki Akun ?</center>
              <br/>
              <a href="{{route('login')}}">
                <center> Masuk </center>
              </a>
              </div>
              <br>
            </div>
        </form>
    </div>   
</div>


@endsection
