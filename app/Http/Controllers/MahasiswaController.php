<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Tugasakhir;
use Alert;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Http\Request;
use Auth;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= \App\Mahasiswa::all();
        return view('mahasiswa.index', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // $prodi = Prodi::orderBy('id_prodi','asc')->get(); 
        // $data = \App\Mahasiswa::all(); 
        
        //  return view('mahasiswa/create',compact('prodi','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'bp_mahasiswa' => 'required',
        //     'nama_mahasiswa' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'id_prodi' => 'required',
        //     'tahun_masuk' => 'required'
        // ]);
        // $data = new Mahasiswa();
        // $data->bp_mahasiswa = $request->bp_mahasiswa;
        // $data->nama_mahasiswa = $request->nama_mahasiswa;
        // $data->tempat_lahir = $request->tempat_lahir;
        // $data->tanggal_lahir = $request->tanggal_lahir;
        // $data->jenis_kelamin = $request->jenis_kelamin;
        // $data->alamat = $request->alamat;
        // $data->id_prodi = $request->id_prodi;
        // $data->tahun_masuk = $request->tahun_masuk;
        // $data->save();

        // $tugasakhir = new Tugasakhir();
        // $tugasakhir->id_mahasiswa = $data->id_mahasiswa;
        // $tugasakhir->nama_mahasiswa =  $data->nama_mahasiswa;
        // $tugasakhir->judul_tugasakhir =null;
        // $tugasakhir->id_kategori =null;
        // $tugasakhir->id_pembimbingsatu =null;
        // $tugasakhir->id_pembimbingdua =null;
        // $tugasakhir->id_pengujisatu =null;
        // $tugasakhir->id_pengujidua =null;
        // $tugasakhir->id_pengujitiga =null;
        // $tugasakhir->tahun_selesai =null;
        // $tugasakhir->laporan_abstrak =null;
        // $tugasakhir->laporan_lengkap =null;
        // $tugasakhir->saran_pengembangan =null;
        // $tugasakhir->save();

        // $riwayat = new Riwayat();
        // $riwayat->id_tugasakhir = $tugasakhir->id_tugasakhir;
        // $riwayat->pembimbingsatu = "";
        // $riwayat->pembimbingdua = "";
        // $riwayat->pengujisatu = "";
        // $riwayat->pengujidua = "";
        // $riwayat->pengujitiga = "";
        // $riwayat->nip_pembimbingsatu = "";
        // $riwayat->nip_pembimbingdua = "";
        // $riwayat->nip_pengujisatu = "";
        // $riwayat->nip_pengujidua = "";
        // $riwayat->nip_pengujitiga = "";
        // $riwayat->save();
        
        // Alert::success('Inserted','Data Berhasil Ditambahkan');

        // $bp = Auth::user()->bp_nip;
        // $mhs = DB::table('tb_mahasiswa')->select('id_mahasiswa')->where('bp_mahasiswa',$bp)->first();
        
        //  if(Auth::user()->level=='Mahasiswa'){
        //     return redirect()->route('mahasiswa.show',$mhs->id_mahasiswa);
        // }else{
        //     return redirect()->route('/mahasiswa');
        // }
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Mahasiswa::findOrFail($id);

        // return view('mahasiswa.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = \App\Mahasiswa::find($id);
        // return view('mahasiswa/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = \App\Mahasiswa::find($id);
        // $request->validate([
        //     'bp_mahasiswa' => 'required',
        //     'nama_mahasiswa' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'id_prodi' => 'required',
        //     'tahun_masuk' => 'required'
        // ]);
        // $data->bp_mahasiswa = $request->input('bp_mahasiswa');
        // $data->nama_mahasiswa = $request->input('nama_mahasiswa');
        // $data->tempat_lahir = $request->input('tempat_lahir');
        // $data->tanggal_lahir = $request->input('tanggal_lahir');
        // $data->jenis_kelamin = $request->input('jenis_kelamin');
        // $data->alamat = $request->input('alamat');
        // $data->id_prodi = $request->input('id_prodi');
        // $data->tahun_masuk = $request->input('tahun_masuk');
                     

        // $data->update();
        // Alert::success('Updated','Data Berhasil Diupdate');
        // $bp = Auth::user()->bp_nip;
        // $mhs = DB::table('tb_mahasiswa')->select('id_mahasiswa')->where('bp_mahasiswa',$bp)->first();
        
        //  if(Auth::user()->level=='Mahasiswa'){
        //     return redirect()->route('mahasiswa.show',$mhs);
        // }else{
        //     return redirect()->route('mahasiswa.index');
        // }
        //  return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  $data = \App\Mahasiswa::find($id);
        //  $data->delete();
        //  Alert::success('Deleted','Data Berhasil Dihapus');
        //  return redirect()->route('mahasiswa.index');
    }

    // public function tugasakhir(){
    // //     $datas = \App\Tugasakhir::where('id','>','0')->get();
    // //      return $datas;
    //  }
}
