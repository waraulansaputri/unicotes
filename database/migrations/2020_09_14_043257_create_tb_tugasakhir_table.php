<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTugasakhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tugas_akhir', function (Blueprint $table) {
            $table->bigIncrements('id_tugasakhir');
            $table->unsignedbigInteger('id_mahasiswa')->unsigned();
            $table->string('nama_mahasiswa',50)->nullable();
            $table->string('judul_tugasakhir')->nullable();
            $table->unsignedbigInteger('id_kategori')->unsigned()->nullable();
            $table->unsignedbigInteger('id_pembimbingsatu')->unsigned()->nullable();
            $table->unsignedbigInteger('id_pembimbingdua')->unsigned()->nullable();
            $table->unsignedbigInteger('id_pengujisatu')->unsigned()->nullable();
            $table->unsignedbigInteger('id_pengujidua')->unsigned()->nullable();
            $table->unsignedbigInteger('id_pengujitiga')->unsigned()->nullable();
            $table->year('tahun_selesai')->nullable();;
            $table->string('laporan_abstrak')->nullable();;
            $table->string('laporan_lengkap')->nullable();;
            $table->string('saran_pengembangan')->nullable();;

            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('tb_mahasiswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id_kategori')->on('tb_kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pembimbingsatu')->references('id_dosen')->on('tb_dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pembimbingdua')->references('id_dosen')->on('tb_dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pengujisatu')->references('id_dosen')->on('tb_dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pengujidua')->references('id_dosen')->on('tb_dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pengujitiga')->references('id_dosen')->on('tb_dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_tugasakhir');
    }
}
