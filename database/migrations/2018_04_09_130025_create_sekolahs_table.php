<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nss')->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->integer('desa_id')->unsigned();
            $table->string('rt');
            $table->string('rw');
            $table->string('no_telp');
            $table->string('no_fax');
            $table->string('lat_long');
            $table->text('image');
            $table->string('email');
            $table->string('website');
            $table->string('kepala_sekolah');
            $table->boolean('status');
            $table->timestamps();

            //$tabless->foreign('desa_id')->references('id')->on('desa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekolah');
    }

     public function detail(Category $category)
    {
        return view('sekolah.form', [
            'sekolah' => $sekolah
        ]);
    }
}
