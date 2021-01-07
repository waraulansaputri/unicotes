<?php

namespace App\Http\Controllers;

use App\Tugasakhir;
use App\Dosen;
use App\Jurusan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Parser\Reader;

class DashboardController extends Controller
{
	
    public function indexdosen(Request $request)
    {
        //megambil niilai keseluruhan tugas akhir
        $tugasakhir=Tugasakhir::get();

        //menampilkan data untuk diagram
        $mhs = \App\Tugasakhir::all();
        $tugas = DB::table('tb_tugas_akhir')->select('tahun_selesai')->distinct()->get();
        
        $kategori=[]; //tahun dari jumlah mahasiswa yang ada per tahun
        $data2=[];
        $data3=[];
        
        $datapenguji=[];
        
        $result2 = Dosen::where('nip_dosen',Auth::user()->bp_nip)->first();

        $ds = $result2->id_dosen;
      

        foreach($tugas as $ta)
        {
        	$kategori[] = $ta->tahun_selesai;
        	$data2[] = $mhs->where('tahun_selesai',$ta->tahun_selesai)->where('id_pembimbingsatu',$ds)->count('id_mahasiswa');
            $data3[] = $mhs->where('tahun_selesai',$ta->tahun_selesai)->where('id_pembimbidua',$ds)->count('id_mahasiswa');
            $data4 = $mhs->where('tahun_selesai',$ta->tahun_selesai)->where('id_pengujisatu',$ds)->count('id_mahasiswa');
            $data5 = $mhs->where('tahun_selesai',$ta->tahun_selesai)->where('id_pengujidua',$ds)->count('id_mahasiswa');
            $data6 = $mhs->where('tahun_selesai',$ta->tahun_selesai)->where('id_pengujitiga',$ds)->count('id_mahasiswa');
            $datapenguji[] = $data4+$data5+$data6;      
        }

    // Menampilkan rekapitulasi bimbingan dan uji oleh dosen

        $pemb = DB::table('tb_dosen')->select('id_dosen')->where('nip_dosen',Auth::user()->bp_nip)->get();

        foreach($pemb as $d)
        {
            // $detail = Tugasakhir::find('id_tugasakhir')->where('id_pembimbingsatu',$d->id_dosen)->count();
            $detail = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pembimbingsatu',$d->id_dosen)->count();


            $detail2 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pembimbingdua',$d->id_dosen)->count();
            $c1 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujisatu',$d->id_dosen)->count();
            $c2 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujidua',$d->id_dosen)->count();
            $c3 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujitiga',$d->id_dosen)->count();
        
            $peng=$c3+$c2+$c1;
        }

        $ta = \App\Tugasakhir::all()->count();

	  //kembalikan nilai dari variabel yang dibuat
        return view('dashboard.dashboard-dosen',['kategori'=>$kategori,'data2'=>$data2,'tugasakhir'=>$tugasakhir,'detail'=>$detail,'detail2'=>$detail2,'peng'=>$peng,'data3'=>$data3,'datapenguji'=>$datapenguji,'result2'=>$result2]);
    }


    public function indexkaprodi(Request $request)
    {
        $tugasakhir=Tugasakhir::get();

        $mhs = \App\Tugasakhir::all();
        $tugas = DB::table('tb_tugas_akhir')->select('tahun_selesai')->distinct()->get();
        
        $kategori=[];
        $data2=[];

        foreach($tugas as $ta)
        {
            $kategori[] = $ta->tahun_selesai;
            $data[] = $mhs->where('tahun_selesai',$ta->tahun_selesai)->count('id_mahasiswa');
        }

        // Menampilkan rekapitulasi dosen

        $pemb = DB::table('tb_dosen')->select('id_dosen')->where('nip_dosen',Auth::user()->bp_nip)->get();

        foreach($pemb as $d)
        {
            // $detail = Tugasakhir::find('id_tugasakhir')->where('id_pembimbingsatu',$d->id_dosen)->count();
            $detail = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pembimbingsatu',$d->id_dosen)->count();

            $detail2 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pembimbingdua',$d->id_dosen)->count();
            $c1 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujisatu',$d->id_dosen)->count();
            $c2 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujidua',$d->id_dosen)->count();
            $c3 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujitiga',$d->id_dosen)->count();
        
            $peng=$c3+$c2+$c1;
        }

         // dd($data);

        $ta = \App\Tugasakhir::all()->count();

      // return view('dashboard.dashboard-dosen',compact('tugasakhir'));
        return view('dashboard.dashboard-kaprodi',['kategori'=>$kategori,'data2'=>$data,'tugasakhir'=>$tugasakhir,'detail'=>$detail,'detail2'=>$detail2,'peng'=>$peng]);
    }

    public function indexkajur(Request $request)
    {
        $tugasakhir=Tugasakhir::get(); //mengambil nilai keseluruhan tabel tugasakhir

        //menampilkan data untuk diagram
        $mhs = \App\Tugasakhir::all();
        $tugas = DB::table('tb_tugas_akhir')->select('tahun_selesai')->distinct()->get();
        
        $kategori=[];
        $data2=[];

        foreach($tugas as $ta)
        {
            $kategori[] = $ta->tahun_selesai;
            $data[] = $mhs->where('tahun_selesai',$ta->tahun_selesai)->count('id_mahasiswa');
        }

        // Menampilkan rekapitulasi dosen
        $pemb = DB::table('tb_dosen')->select('id_dosen')->where('nip_dosen',Auth::user()->bp_nip)->get();

        // $rata = DB::table('')

        foreach($pemb as $d)
        {
            // $detail = Tugasakhir::find('id_tugasakhir')->where('id_pembimbingsatu',$d->id_dosen)->count();
            $detail = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pembimbingsatu',$d->id_dosen)->count();

            $detail2 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pembimbingdua',$d->id_dosen)->count();
            $c1 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujisatu',$d->id_dosen)->count();
            $c2 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujidua',$d->id_dosen)->count();
            $c3 = DB::table('tb_tugas_akhir')->select('id_tugasakhir')->where('id_pengujitiga',$d->id_dosen)->count();
        
            $peng=$c3+$c2+$c1;
        }

         // dd($data);

        $ta = \App\Tugasakhir::all()->count();

      // return view('dashboard.dashboard-dosen',compact('tugasakhir'));
        return view('dashboard.dashboard-kajur',['kategori'=>$kategori,'data2'=>$data,'tugasakhir'=>$tugasakhir,'detail'=>$detail,'detail2'=>$detail2,'peng'=>$peng]);
    }
    
    public function dataKajur(Request $request)
    {
        $data = Tugasakhir::
        where('tahun_selesai', $request->tahun)
        ->with('mahasiswa')
        ->get();
        $collect = collect($data)->map(function($val){
            return [
                'id_mahasiswa'  => $val->id_mahasiswa,
                'nama_mahasiswa'  => $val->mahasiswa->nama_mahasiswa,
                'tahun_masuk'   => $thn_msk = $val->mahasiswa->tahun_masuk,
                'tahun_selesai' => $thn_sls = $val->tahun_selesai,
                'lama_studi'    => $thn_sls - $thn_msk,
                'id_prodi'      => $val->mahasiswa->id_prodi,
                'id_kategori'   => $val->id_kategori,
            ];
        });

        $count = [
            'countTI'   => $collect->count(),
            'countMI'   => $collect->where('id_prodi', 1)->count(),
            'countTK'   => $collect->where('id_prodi', 2)->count(),
            'countRPL'  => $collect->where('id_prodi', 3)->count(),
            'countKat1' => $collect->where('id_kategori', 1)->count(),
            'countKat2' => $collect->where('id_kategori', 2)->count(),
            'countKat3' => $collect->where('id_kategori', 3)->count(),
            'countKat4' => $collect->where('id_kategori', 4)->count(),
            'countKat5' => $collect->where('id_kategori', 5)->count(),
            'countKat6' => $collect->where('id_kategori', 6)->count(),
            'rataStudi' => $collect->avg('lama_studi')
        ];

        return response()->json($count);
    }

    public function dataDosen(Request $request)
    {
        $dosen = Dosen::where('nip_dosen',Auth::user()->bp_nip)->first();
        $id_dosen = $dosen->id_dosen;
        $data = Tugasakhir::where('tahun_selesai', $request->tahun)
        ->with('mahasiswa')
        ->get();
        $collect = collect($data)->map(function($val){
            return [
                'id_mahasiswa'  => $val->id_mahasiswa,
                'nama_mahasiswa'  => $val->mahasiswa->nama_mahasiswa,
                'tahun_masuk'   => $thn_msk = $val->mahasiswa->tahun_masuk,
                'tahun_selesai' => $thn_sls = $val->tahun_selesai,
                'lama_studi'    => $thn_sls - $thn_msk,
                'id_prodi'      => $val->mahasiswa->id_prodi,
                'id_kategori'   => $val->id_kategori,
                'id_pembimbingsatu' => $val->id_pembimbingsatu,
                'id_pembimbingdua'  => $val->id_pembimbingdua,
                'id_pengujisatu'    => $val->id_pengujisatu,
                'id_pengujidua' => $val->id_pengujidua,
                'id_pengujitiga'    => $val->id_pengujitiga,
            ];
        });

        $count = [
            'countP1'       => $jump1 = $collect->where('id_pembimbingsatu', $id_dosen)->count(),
            'countP2'       => $jump2 = $collect->where('id_pembimbingdua', $id_dosen)->count(),
            'id_pengujisatu'=> $pgj1 = $collect->where('id_pengujisatu', $id_dosen)->count(),
            'id_pengujidua' => $pgj2 = $collect->where('id_pengujidua', $id_dosen)->count(),
            'id_pengujitiga'=> $pgj3 = $collect->where('id_pengujitiga', $id_dosen)->count(),
            'countUji'      => $pgj1 + $pgj2 + $pgj3,
            'mhsP1'         => $mhsP1 = (int) $collect->where('id_pembimbingsatu', $id_dosen)->avg('lama_studi'),
            'mhsP2'         => $mhsP2 = (int) $collect->where('id_pembimbingdua', $id_dosen)->avg('lama_studi'),
            // 'rataStudi'     => ($mhsP1 + $mhsP2) / ($jump1 + $jump2) 
        ];

        return response()->json($count);
    }

    public function dataKaprodi(Request $request)
    {
        $dosen = Dosen::where('nip_dosen',Auth::user()->bp_nip)->first();
        $id_dosen = $dosen->id_dosen;

        if($dosen->jabatan_dosen == "Kaprodi Manajemen Informatika"){
            $id_prodi = 1;
        }else if($dosen->jabatan_dosen == "Kaprodi Teknik Komputer"){
            $id_prodi = 2;
        }else if($dosen->jabatan_dosen == "Kaprodi Teknik Rekayasa Perangkat Lunak"){
            $id_prodi = 3;
        }else{
            $id_prodi = 0;
        }

        $data = Tugasakhir::
        where('tahun_selesai', $request->tahun)
        ->with('mahasiswa')
        ->get();
        $collect = collect($data)->map(function($val){
            return [
                'id_mahasiswa'  => $val->id_mahasiswa,
                'nama_mahasiswa'  => $val->mahasiswa->nama_mahasiswa,
                'tahun_masuk'   => $thn_msk = $val->mahasiswa->tahun_masuk,
                'tahun_selesai' => $thn_sls = $val->tahun_selesai,
                'lama_studi'    => $thn_sls - $thn_msk,
                'id_prodi'      => $val->mahasiswa->id_prodi,
                'id_kategori'   => $val->id_kategori,
                'id_pembimbingsatu' => $val->id_pembimbingsatu,
                'id_pembimbingdua'  => $val->id_pembimbingdua,
                'id_pengujisatu'    => $val->id_pengujisatu,
                'id_pengujidua' => $val->id_pengujidua,
                'id_pengujitiga'    => $val->id_pengujitiga,
            ];
        })->where('id_prodi', $id_prodi);

        $dataTA = Tugasakhir::with('mahasiswa')->get();
        $countMI = collect($dataTA)->where('mahasiswa.id_prodi', $id_prodi)->count(); 

        $count = [
            'countAllProdi'=> $countMI,
            'countProdi'   => $collect->count(),
            'countKat1' => $collect->where('id_kategori', 1)->count(),
            'countKat2' => $collect->where('id_kategori', 2)->count(),
            'countKat3' => $collect->where('id_kategori', 3)->count(),
            'countKat4' => $collect->where('id_kategori', 4)->count(),
            'countKat5' => $collect->where('id_kategori', 5)->count(),
            'rataStudi' => (int) $collect->avg('lama_studi')
        ];

        return response()->json($count);
    }
}

