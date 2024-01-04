<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipe_dokumen_id')->nullable(true);
            $table->text('judul_peraturan')->nullable(true);
            $table->string('teu_badan_pengarang')->nullable(true);
            $table->string('no_peraturan')->nullable(true);
            $table->string('no_panggil')->nullable(true);
            $table->unsignedBigInteger('kab_kota_id')->nullable(true);
            $table->unsignedBigInteger('jenis_peraturan_id')->nullable(true);
            $table->unsignedBigInteger('skpd_pemrakarsa_id')->nullable(true);
            $table->unsignedBigInteger('klasifikasi_id')->nullable(true);
            $table->string('cetakan_edisi')->nullable(true);
            $table->string('tempat_terbit')->nullable(true);
            $table->string('penerbit')->nullable(true);
            $table->date('waktu_penetapan')->nullable(true);
            $table->text('deskripsi_fisik')->nullable(true);
            $table->string('sumber')->nullable(true);
            $table->string('subjek')->nullable(true);
            $table->string('isbn')->nullable(true);
            $table->unsignedBigInteger('status_peraturan_id')->nullable(true);
            $table->unsignedBigInteger('bahasa_id')->nullable(true);
            $table->string('lokasi')->nullable(true);
            $table->string('bidang')->nullable(true);
            $table->string('no_induk_buku')->nullable(true);
            $table->string('lampiran_file')->nullable(true);
            $table->string('link_file')->nullable(true);
            $table->text('keterangan_peraturan')->nullable(true);
            $table->boolean('status_publik')->nullable(true);
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
        Schema::dropIfExists('dokumens');
    }
}
