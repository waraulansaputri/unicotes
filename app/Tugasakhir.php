<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class Tugasakhir extends Model
{
    protected $table = 'tb_tugas_akhir';
    protected $primaryKey ='id_tugasakhir';
    // protected $fillable =['nama_prodi','id_jurusan'];
    protected $guarded=[];

    public function kategori(){
    	return $this->belongsTo('App\Kategori','id_kategori');
	}

    public function mahasiswa(){
        return $this->belongsTo('App\Mahasiswa','id_mahasiswa');
    }

	public function pa1(){
    	return $this->belongsTo('App\Dosen','id_pembimbingsatu');
	}

    public function pa2(){
        return $this->belongsTo('App\Dosen','id_pembimbingdua');
    }

    public function pe1(){
        return $this->belongsTo('App\Dosen','id_pengujisatu');
    }

    public function pe2(){
        return $this->belongsTo('App\Dosen','id_pengujidua');
    }

    public function pe3(){
        return $this->belongsTo('App\Dosen','id_pengujitiga');
    }
	
}
