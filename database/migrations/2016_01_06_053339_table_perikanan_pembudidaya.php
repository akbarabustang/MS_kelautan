<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePerikananPembudidaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('app_perikanan_pembudidaya', function(Blueprint $t)
        {
            $t->bigIncrements('id')->unsigned();
            $t->string('nik', 30);
            $t->string('nama', 40);
            $t->string('alamat');
            $t->string('no_kartu_nelayan', 30);
            $t->string('jabatan_dalam_kelompok', 40);
            $t->string('nama_kelompok', 40);
            $t->integer('id_jenis_usaha_budidaya');
            $t->integer('id_kepemilikan_sarana');
            $t->integer('id_bantuan');
            $t->string('tahun_bantuan', 4);
            $t->enum('jenis', ['Nelayan','Pembudidaya']);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perikanan_pembudidaya');
    }
}
