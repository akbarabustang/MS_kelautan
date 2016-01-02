<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelSarana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('msakti_sarana', function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->string('nama');
            $t->enum('jenis', ['Nelayan','Pembudidaya']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sarana');
    }
}