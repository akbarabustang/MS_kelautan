<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelSubSarana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_sarana', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis');
            $table->string('sub');
            $table->enum('tipe',['Pembudidaya','Nelayan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('app_sarana');
    }
}
