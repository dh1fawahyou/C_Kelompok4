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
            $table->string('nama', 125);
            $table->integer('no_ijazah')->unique();
            $table->string('no_skhun', 100)->unique();
            $table->year('tahun_lulus', 4);
            $table->date('tgl_pengambilan');
            $table->boolean('vcd_foto');
            $table->string('nama_sekolah_lanjutan', 100);
            $table->boolean('status', 50);
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
