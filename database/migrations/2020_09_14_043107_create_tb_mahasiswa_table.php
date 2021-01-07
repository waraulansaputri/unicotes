<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id_mahasiswa');
            $table->string('bp_mahasiswa',10)->nullable();
            $table->string('nama_mahasiswa',50)->nullable();
            $table->string('tempat_lahir',50)->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan'])->nullable();
            $table->text('alamat')->nullable();
            $table->unsignedbigInteger('id_prodi')->unsigned();
            $table->year('tahun_masuk')->nullable();

            $table->foreign('id_prodi')->references('id_prodi')->on('tb_prodi')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tb_mahasiswa');
    }
}
