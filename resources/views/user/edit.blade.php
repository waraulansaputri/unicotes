@extends("templates.default")
@section("content")
<section class="wrapper">
  <h2><b><i class="fa fa-angle-right"></i> Edit Data User</b></h2>
    <a href="{{route('user.index')}}" class="btn btn-theme"><i class="fa fa-undo"></i> Kembali Ke Daftar User</a>
    <div class="row mb">
        <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> <strong>Data User</strong></h4><hr><table class="table table-striped table-advance table-hover">

  <form method="POST" action="{{ route('user.update', $data) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
     <div class="form-group">
          <label >Nama</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$data->name}}">
    </div> 
    <div class="form-group">
          <label >Email</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$data->email}}">
    </div>     
    @if(Auth::user()->level == 'Admin') 
    <div class="form-group">
          <label>Level</label>
          <select name="level" class="form-control">
            <option value="">Pilih Level</option>
              <option value="Mahasiswa" {{$data->level === "Mahasiswa" ? "selected" : ""}}>Mahasiswa</option>
              <option value="Admin" {{$data->level === "Admin" ? "selected" : ""}}>Admin</option>
          </select>
    </div> 
    
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Hak Akses</label>
        <div class="col-sm-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="hak_akses" id="hak_akses" value="Pending" {{$data->hak_akses === "Pending" ? "checked" : ""}} > Pending <i class="input-helper"></i>
            </label>
          </div>
        </div>
       
        <div class="col-sm-5">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="hak_akses" id="hak_akses" value="Aktif" {{$data->hak_akses === "Aktif" ? "checked" : ""}}> Aktif <i class="input-helper"></i>
            </label>
          </div>
        </div>
    </div> 
    @endif

    <div class="modal-footer">
      <button type="submit" class="btn btn-theme03"><i class="fa fa-edit"></i> Update</button>
      
    </div>


</form>
</div>
</table>
</div>
</div>
</section>
@stop