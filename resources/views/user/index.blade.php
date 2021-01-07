@extends("templates.default")
@section("content")
<section class="wrapper">
  <h2><b><i class="fa fa-angle-right"></i> Daftar Data User</b></h2>
  {{-- @if(Auth::user()->level == 'Admin')
  <a href="{{route('user.create')}}" class="btn_tambah btn pull-left btn-success">
    <i class="fa fa-plus"></i> Tambah Data </a>
  @endif --}}
<div class="content-panel">
    <div class="row mb">
          <!-- page start-->
              <center><h4><strong>Data User</strong></h4></center></div>
              <hr>
              <table  class="table table-bordered table-advance table-hover" id="datatables">  
                
                <thead>
                  <tr>
                    <th> No</th>
                    <th> Nama </th>
                    <th> Email </th>
                    <th> Level </th>
                    @if(Auth::user()->level == 'Admin')
                    <th> Hak Akses </th>
                    @endif
                    <th> Aksi</th>

                  </tr>
                </thead>
                <tbody>
                    <?php $i=0;
                    $datas = \App\User::all(); ?>
                    @foreach($datas as $data)
                    <tr>
                        <td><b>{{++$i}}.</b></td>
                        <td><b>{{$data->name}}</b></td>
                        <td><b>{{$data->email}}</b></td>
                        <td><b>{{$data->level}}</b></td>
                        @if(Auth::user()->level == 'Admin')
                        <td>
                            @if($data->hak_akses == 'Pending')
                            <label class="label label-danger">Pending</label>
                            @elseif($data->hak_akses == 'Aktif')
                            <label class="label label-primary">Aktif</label>
                            @endif
                        </td>    
                        @endif    
                        @if(Auth::user()->level == 'Admin')
                        <td>    
                            <form action="{{route('user.destroy', $data)}}" method="post">
                              <a href="{{route('user.edit', $data)}}"  class="btn btn-warning btn-md"><i class="fa fa-pencil"></i></a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-trash-o "></i></button>
                            </form> 
                            @endif
                        </td>
                       
                        @if(Auth::user()->level == 'Mahasiswa')
                            <td>    
                              <form action="{{route('user.destroy', $data)}}" method="post">
                                <a href="{{route('user.edit', $data)}}"  class="btn btn-success btn-md"><i class="fa fa-pencil"></i></a>
                              </form> 
                            </td>
                            @endif
                    </tr>
                    @endforeach
                </tbody>
        </table>
</div>
  
<!-- Tambah Data User (Modal) -->
<div class="modal fade" id="modalUser" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel"><b>Tambah Data User</b></h3>
    </div>
    <div class="modal-body">

       <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

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
                        <option value="Dosen">Dosen</option>
                        <option value="Admin">Admin</option>
                    </select>  
                </div>                
              </div>  
              <div class="form-group row" id="hak_akses_admin">
                <label class="col-md-4 col-form-label text-md-right" for="hak_akses">{{ __('Hak Akses') }}</label>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="hak_akses" id="hak_akses" value="Pending" checked="" required autocomplete="hak_akses" >Pending <i class="input-helper"></i>
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
    
    <div class="modal-footer">
      <button type="submit" class="btn btn-theme03"><i class="fa fa-arrow-circle-right fa-lg"></i> Submit</button>
      <button type="reset" class="btn btn-theme02"><i class="fa fa-remove"></i> Reset</button>
      <button type="button" class="btn btn-theme04" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
    </div>
</form>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

    
@endsection