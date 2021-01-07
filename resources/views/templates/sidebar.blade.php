<div id="sidebar" class="nav-collapse ">
    <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="/user/{{Auth::user()->id}}/profil">
            @if(Auth::user()->avatar == '')
            <img src="{{asset('assets/img/profil/default-avatar.png') }}" class="img-circle" width="100" height="100">
            @else
           <img src="{{asset('assets/img/profil/'. Auth::user()->avatar)}}" class="img-circle" width="100" height="100">
                @endif
               </a>
          </p>

          {{-- @if(Auth::user()->level == 'Mahasiswa')
          <li class="sub-menu">
            <a href="{{route('mahasiswa.index')}}">
              <i class="fa fa-male"></i>
              <span><b>BERANDA</b></span>
              </a>
          </li>
          @endif --}}
          {{-- @if(Auth::user()->level == 'Admin')
          <li class="sub-menu">
            <a href="{{route('mahasiswa.index')}}">
              <i class="fa fa-male"></i>
              <span><b>BERANDA</b></span>
              </a>
          </li>
          @endif --}}

          @if(Auth::user()->level == 'Admin')
          <li class="sub-menu">
            <a href="{{route('user.index')}}">
              <i class="fa fa-users"></i>
              <span><b>Data User</b></span>
              </a>
          </li>
          @endif
          @if(Auth::user()->level == 'Mahasiswa')
          <li class="sub-menu">
            <a href="{{route('user.index')}}">
              <i class="fa fa-users"></i>
              <span><b>Data User</b></span>
              </a>
          </li>
          @endif

    </ul>
</div>
