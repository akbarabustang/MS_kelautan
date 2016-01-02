<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msakti_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('konten');
            $table->integer('id_user');
            $table->string('gambar', 50);
            $table->enum('arsip', ['0','1']);
            $table->enum('draft', ['0','1']);
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
        Schema::drop('pages');
    }
}
