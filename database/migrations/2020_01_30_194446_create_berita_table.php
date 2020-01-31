<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('foto');
            $table->string('foto_desk');
            $table->string('slug')->unique();
            $table->string('deskripsi');
            $table->bigInteger('admin_id')->unsigned();
            $table->bigInteger('b_kategori_id')->unsigned();
            $table->tinyInteger('status');
            $table->bigInteger('user_id')->unsigned();
            $table->string('seo_keyword')->nullable();
            $table->string('seo_tags')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('b_kategori_id')->references('id')->on('b_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
