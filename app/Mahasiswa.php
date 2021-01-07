<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'tb_mahasiswa';
    protected $primaryKey ='id_mahasiswa';
    // protected $fillable =['bp_mahasiswa','nama_mahasiswa','tanggal_lahir','jenis_kelamin','alamat','id_prodi','tahun_masuk'];
    protected $guarded=[];

    public function prodi(){
    	return $this->belongsTo('App\Prodi','id_prodi');
	}

	public function prestasi()
	{
		return $this->hasMany(Prestasi::class);
	}

    public function tugasakhir()
    {
        return $this->hasMany('App\Tugasakhir');
    }

    // public function setNama_mahasiswaAttribute($value)
    // {
    //     $this->attributes['nama_mahasiswa'] = strtoupper($value);
    // }

    // public function getNama_mahasiswaAttribute($value)
    // {
    //     return strtoupper($value);
    // }

}
