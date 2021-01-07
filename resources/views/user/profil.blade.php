@extends('templates.default')
@section('content')
 <section id="main-profil">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12 mt">
        <div class="row content-panel">
          <div class="col-md-4 profile-text mt mb centered">
            <div class="right-divider ">
              <div class="profile-pic">
                <p><img src="{{$user->getAvatar()}}" class="img-circle"></p>
              </div>
            </div>
          </div>
          <!-- /col-md-4 -->
        <div class="col-md-4 profile-text">
          <h3>{{$user->name}}</h3>
          <h6><strong>{{$user->level}}<br>{{$user->email}}</strong></h6>
          <br>
        </div>
        </div>
          <!-- /col-md-4 -->
      </div>
        <!-- /row -->
    <!-- /col-lg-12 -->
    <div class="col-lg-12 mt">
      <div class="row content-panel">
        <div class="panel-heading">
          <ul class="nav nav-tabs nav-justified">
            <li class="active">
              <a data-toggle="tab" href="#contact" class="contact-map">Informasi Pribadi</a>
            </li>
            <li>
              <a data-toggle="tab" href="#edit">Edit Profil</a>
            </li>
          </ul>
        </div>
        <!-- /panel-heading -->
    <div class="panel-body">
      <div class="tab-content">
        <!-- /tab-pane -->
        <div id="contact" class="tab-pane">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 detailed mt">
              <h4 class="mb">Informasi Pribadi</h4>
                <form role="form" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Nama</label>
                      <div class="col-lg-6">
                        <label class="col-lg-2 control-label">{{$user->name}}</label>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Alamat Email</label>
                      <div class="col-lg-6">
                        <label class="col-lg-2 control-label">{{$user->email}}</label>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Status</label>
                      <div class="col-lg-6">
                        <label class="col-lg-2 control-label">{{$user->level}}</label>
                      </div>
                  </div>   
                </form>
            </div>
            <!-- /col-lg-8 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /tab-pane -->
        <div id="edit" class="tab-pane">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 detailed">
              @if(isset($user))
                <h4 class="mb">Edit Profil</h4>
                <form role="form" class="form-horizontal" method="POST" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('put') }}
                    <div class="form-group">
                      <label class="col-lg-2 control-label"> Foto Profil </label>
                        <div class="col-lg-6">
                          <input type="file" id="exampleInputFile" name="avatar" class="uploads form-control" style="margin-top: 20px;" value="{{$user->avatar}}" accept="image">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label"> Nama </label>
                        <div class="col-lg-6">
                          <input type="text" id="exampleInputFile" name="name" class="form-control" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label"> Alamat Email</label>
                        <div class="col-lg-6">
                          <input type="text" id="exampleInputFile" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-6">
                          <select name="level" class="form-control">
                            <option value="Mahasiswa" @if($user->level == 'Mahasiswa') selected @endif>Mahasiswa</option>
                            <option value="Admin" @if($user->level == 'Admin') selected @endif>Admin</option>
                          </select>
                        </div>
                    </div>
                    <br>
                        <button class="btn btn-theme" type="submit">Save</button>
                        <button class="btn btn-theme04" type="reset">Cancel</button>
                </form>
                @endif
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
        </div>
      </section>
    </section>
@stop