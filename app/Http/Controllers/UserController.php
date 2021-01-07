<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HashFReuse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas=\App\User::all();
        // dd($datas);
        return view('user.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'level' => $request->get('level'),
            'avatar' => $request->get('avatar'),
            'hak_akses' => $request->get('hak_akses'),

        ]);
        Alert::success('Inserted','Data Berhasil Ditambahkan');
        return redirect('/user');
    }

    public function show(User $user)
    {
        //
    }


    public function edit($id)
    {
         $data = \App\User::find($id);
         return view('user/edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
      $profil = \App\User::find($id);
      $profil->update($request->all());
      if ($request->hasFile('avatar')) {
      $request->file('avatar')->move('assets/img/profil',$request->file('avatar')->getClientOriginalName());
      $profil->avatar = $request->file('avatar')->getClientOriginalName();
      }
      $profil->save();
        Alert::success('Updated','Data Berhasil Diupdate');
        return redirect('/user');
    }


    public function destroy($id)
    {
        $data = \App\User::find($id);
        $data->delete();
        Alert::success('Deleted','Data Berhasil Dihapus');
       return redirect('/user')->with('sukses', 'data Berhasil di hapus');
    }

    public function profil($id)
    {
        $user = \App\User::find($id);
        return view ('user.profil',['user' => $user]);
    }
}



