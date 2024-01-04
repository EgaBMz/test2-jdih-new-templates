<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankumaskinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankumaskins', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_perkara')->nullable(true);
            $table->string('jenis_perkara')->nullable(true);
            $table->string('tahun_pemberian_bantuan_hukum')->nullable(true);
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
        Schema::dropIfExists('bankumaskins');
    }
}
