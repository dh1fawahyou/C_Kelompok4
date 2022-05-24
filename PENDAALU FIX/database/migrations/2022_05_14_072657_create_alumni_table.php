<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->integer('no_induk')->unique();
            $table->string('nama');
            $table->integer('no_ijazah')->unique();
            $table->string('no_skhun')->unique();
            $table->year('tahun_lulus');
            $table->date('tgl_pengambilan');
            $table->boolean('vcd_foto');
            $table->string('nama_sekolah_lanjutan');
            $table->boolean('status');
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
        Schema::dropIfExists('alumni');
    }
}
