
@extends('templates.auth')
@section('content')
<div id="verify-page">
    <div class="container">
        <form class="form-verify" method="POST">
            <h2 class="form-verify-heading">Verifikasi Alamat Email Anda</h2>
                <div class="verify-wrap">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan pada proses Log In sistem TES UNICO, silahkan cek alamat email anda untuk melakukan proses verifikasi melalui link yang telah dikirimkan pada inbox email anda. Jika anda tidak menemukan email dari kami, coba cek bagian spam email anda. Harap segera lakukan proses verifikasi setelah anda melakukan proses pendaftaran.') }}
                    {{ __('Jika anda tidak menerima email dari TES UNICO') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik disini ') }}</a>{{ __('untuk meminta dikirimkan ulang.') }}
                </div>
            </form>
    </div>
</div>
@endsection