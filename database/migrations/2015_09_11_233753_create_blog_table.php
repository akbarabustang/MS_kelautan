<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msakti_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('konten');
            $table->string('tag');
            $table->string('gambar',50);
            $table->enum('draft',['0','1']);
            $table->enum('arsip',['0','1']);
            $table->integer('id_user');
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
        Schema::drop('blog');
    }
}
