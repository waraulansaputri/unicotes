<?php

namespace App\Http\Controllers;

use App\Tugasakhir;
use App\Kategori;
use App\Dosen;
use App\Mahasiswa;
use App\Riwayat;
use Alert;
use Carbon\Carbon;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class TugasakhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= \App\Tugasakhir::all();
        $kategori = Kategori::all();
        // return view('tugasakhir.index', ['datas' => $datas]);

        return view('tugasakhir.index',compact('datas','kategori'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::orderBy('id_kategori','asc')->get(); 
        $dosen = Dosen::orderBy('id_dosen','asc')->get(); 
        $mahasiswa = Mahasiswa::orderBy('id_mahasiswa','asc')->get(); 
        $data = \App\Tugasakhir::all(); 
         return view('tugasakhir/create',compact('kategori','dosen','data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = tugasakhir::create([
            'id_mahasiswa' => $request->get('id_mahasiswa'),
            'judul_tugasakhir' => $request->get('judul_tugasakhir'),
            'id_kategori' => $request->get('id_kategori'),
            'id_pembimbingsatu' => $request->get('id_pembimbingsatu'),
            'id_pembimbingdua' => $request->get('id_pembimbingdua'),
            'id_pengujisatu' => $request->get('id_pengujisatu'),
            'id_pengujidua' => $request->get('id_pengujidua'),
            'id_pengujitiga' => $request->get('id_pengujitiga'),
            'tahun_selesai' => $request->get('tahun_selesai'),
            'laporan_abstrak' => $request->get('laporan_abstrak'),
            'laporan_lengkap' => $request->get('laporan_lengkap'),
            'saran_pengembangan' => $request->get('saran_pengembangan'),
        
        ]);
      
        Alert::success('Inserted','Data Berhasil Ditambahkan');
        return redirect('/tugasakhir');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tugasakhir::findOrFail($id);

        return view('tugasakhir.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tugasakhir::findOrFail($id);
        return view('tugasakhir/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = \App\Tugasakhir::find($id);
        $data->judul_tugasakhir = $request->input('judul_tugasakhir');
        $data->id_kategori = $request->input('id_kategori');
        $data->id_pembimbingsatu = $request->input('id_pembimbingsatu');
        $data->id_pembimbingdua = $request->input('id_pembimbingdua');
        $data->id_pengujisatu = $request->input('id_pengujisatu');
        $data->id_pengujidua = $request->input('id_pengujidua');
        $data->id_pengujitiga = $request->input('id_pengujitiga');
        $data->tahun_selesai = $request->input('tahun_selesai');
       if($request->file('laporan_abstrak'))
        {
            $file = $request->file('laporan_abstrak');
            $dt = Carbon::now();
            $acak = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('laporan_abstrak')->move("assets/file_uploads/laporan_abstrak", $fileName);
            $data->laporan_abstrak = $fileName;
        }
         if($request->file('laporan_lengkap'))
        {
            $file = $request->file('laporan_lengkap');
            $dt = Carbon::now();
            $acak = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('laporan_lengkap')->move("assets/file_uploads/laporan_lengkap", $fileName);
            $data->laporan_lengkap = $fileName;
        }
        $data->saran_pengembangan = $request->input('saran_pengembangan');
       

        $data->save();

         $alldosen= \App\Dosen::all();

       


        if(!empty($data->id_pembimbingsatu)){
            $dosen1 = DB::table('tb_dosen')->select('nama_dosen')->where('id_dosen',$data->id_pembimbingsatu)->first();
            $nip1 = DB::table('tb_dosen')->select('nip_dosen')->where('id_dosen',$data->id_pembimbingsatu)->first();
        }

        if(!empty($data->id_pembimbingdua)) {
            $dosen2 = Dosen::where('id_dosen',$data->id_pembimbingdua)->select('nama_dosen')->first();
            $nip2 = Dosen::where('id_dosen',$data->id_pembimbingdua)->select('nip_dosen')->first();
            
        }

        if(!empty($data->id_pengujisatu)) {
            $dosen3 = Dosen::where('id_dosen',$data->id_pengujisatu)->select('nama_dosen')->first();
            $nip3 = Dosen::where('id_dosen',$data->id_pengujisatu)->select('nip_dosen')->first();
            
        }

        if(!empty($data->id_pengujidua)) {
            $dosen4 = Dosen::where('id_dosen',$data->id_pengujidua)->select('nama_dosen')->first();
            $nip4 = Dosen::where('id_dosen',$data->id_pengujidua)->select('nip_dosen')->first();
            
        }

        if(!empty($data->id_pengujitiga)) {
            $dosen5 = Dosen::where('id_dosen',$data->id_pengujitiga)->select('nama_dosen')->first();
            $nip5 = Dosen::where('id_dosen',$data->id_pengujitiga)->select('nip_dosen')->first();
            
        }        


         $allriwayat= Riwayat::where('id_tugasakhir',$data->id_tugasakhir)->get();

        if(!empty($data->id_pembimbingsatu))
         {
            
            $result1 = DB::table('tb_dosen')->select('nama_dosen')->where('id_dosen', $data->id_pembimbingsatu)->first();
            

            $result2 = DB::table('tb_dosen')->select('nip_dosen')->where('id_dosen', $data->id_pembimbingsatu)->first();
           


            $dosen =  DB::table('tb_dosen')->where('id_dosen',$data->id_pembimbingsatu)->get();
             foreach ($allriwayat as $d) {
            $ta = Riwayat::find($d->id);
            $ta->where('id_tugasakhir',$data->id_tugasakhir)
            ->update([
                        'pembimbingsatu'=>$result1->nama_dosen,
                       
                        'nip_pembimbingsatu'=>$result2->nip_dosen,
                        
                    ]);
            $ta->save();
            
         }

         }

        if(!empty($data->id_pembimbingdua))
         {
            
            $result3 = DB::table('tb_dosen')->select('nama_dosen')->where('id_dosen', $data->id_pembimbingdua)->first();
           
            $result4 = DB::table('tb_dosen')->select('nip_dosen')->where('id_dosen', $data->id_pembimbingdua)->first();
           


            $dosen =  DB::table('tb_dosen')->where('id_dosen',$data->id_pembimbingdua)->get();
             foreach ($allriwayat as $d) {
            $ta = Riwayat::find($d->id);
            $ta->where('id_tugasakhir',$data->id_tugasakhir)
            ->update([
                        'pembimbingdua'=>$result3->nama_dosen,
                       
                        'nip_pembimbingdua'=>$result4->nip_dosen,
                        
                    ]);
            $ta->save();
            
         }

         }  

        if(!empty($data->id_pengujisatu))
         {
            
            $result5 = DB::table('tb_dosen')->select('nama_dosen')->where('id_dosen', $data->id_pengujisatu)->first();
            

            $result6 = DB::table('tb_dosen')->select('nip_dosen')->where('id_dosen', $data->id_pengujisatu)->first();
           


            $dosen =  DB::table('tb_dosen')->where('id_dosen',$data->id_pengujisatu)->get();
             foreach ($allriwayat as $d) {
            $ta = Riwayat::find($d->id);
            $ta->where('id_tugasakhir',$data->id_tugasakhir)
            ->update([
                        'pengujisatu'=>$result5->nama_dosen,
                       
                        'nip_pengujisatu'=>$result6->nip_dosen,
                        
                    ]);
            $ta->save();
            
         }

         }


        if(!empty($data->id_pengujidua))
         {
            
            $result7 = DB::table('tb_dosen')->select('nama_dosen')->where('id_dosen', $data->id_pengujidua)->first();
            

            $result8 = DB::table('tb_dosen')->select('nip_dosen')->where('id_dosen', $data->id_pengujidua)->first();
           


            $dosen =  DB::table('tb_dosen')->where('id_dosen',$data->id_pengujidua)->get();
             foreach ($allriwayat as $d) {
            $ta = Riwayat::find($d->id);
            $ta->where('id_tugasakhir',$data->id_tugasakhir)
            ->update([
                        'pengujidua'=>$result7->nama_dosen,
                       
                        'nip_pengujidua'=>$result8->nip_dosen,
                        
                    ]);
            $ta->save();
            
         }

         }   

        if(!empty($data->id_pengujitiga))
         {
            
            $result9 = DB::table('tb_dosen')->select('nama_dosen')->where('id_dosen', $data->id_pengujitiga)->first();
            

            $result10 = DB::table('tb_dosen')->select('nip_dosen')->where('id_dosen', $data->id_pengujitiga)->first();
           


            $dosen =  DB::table('tb_dosen')->where('id_dosen',$data->id_pengujitiga)->get();
             foreach ($allriwayat as $d) {
            $ta = Riwayat::find($d->id);
            $ta->where('id_tugasakhir',$data->id_tugasakhir)
            ->update([
                        'pengujitiga'=>$result9->nama_dosen,
                       
                        'nip_pengujitiga'=>$result10->nip_dosen,
                        
                    ]);
            $ta->save();
            
         }

         } 


     
        Alert::success('Update','Data Berhasil Diupdate');

        $bp = Auth::user()->bp_nip;
        $mhs = DB::table('tb_mahasiswa')->select('id_mahasiswa')->where('bp_mahasiswa',$bp)->first();
        
         if(Auth::user()->level=='Mahasiswa'){
            return redirect()->route('tugasakhir.show',$mhs->id_mahasiswa);
        }else{
            return redirect()->route('tugasakhir.index');
        }
        //  return redirect()->route('tugasakhir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tugasakhir  $tugasakhir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Tugasakhir::find($id);
        $data->delete();
        Alert::success('Deleted','Data Berhasil Dihapus');
         return redirect()->route('tugasakhir.index');
    }

        public function tugasakhir(){
        $datas = \App\Tugasakhir::where('id','>','0')->get();
         return $datas;
    }


}
