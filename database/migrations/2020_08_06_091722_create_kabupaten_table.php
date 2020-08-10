<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKabupatenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mentah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jum_balita');
            $table->integer('jum_perkiraan');
            $table->integer('jum_ditemukan');
            $table->unsignedInteger('kabupaten_id')->nullable();
            $table->timestamps();
        });

        Schema::create('kabupaten', function (Blueprint $kolom) {
            $kolom->increments('id');
            $kolom->string('kabupaten');
            $kolom->timestamps();
        });

        Schema::table('data_mentah', function(Blueprint $kolom){
          $kolom->foreign('kabupaten_id')->references('id')->on('kabupaten')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('data_olah', function (Blueprint $table1) {
            $table1->bigIncrements('id');
            $table1->unsignedInteger('iterasi_id')->nullable();
            $table1->unsignedInteger('kabupaten_id')->nullable();
            $table1->decimal('c1',12,6);
            $table1->decimal('c2',12,6);
            $table1->decimal('c3',12,6);
            $table1->timestamps();
        });

        Schema::create('iterasi', function (Blueprint $kolom1) {
            $kolom1->increments('id');
            $kolom1->char('iterasi',2);
            $kolom1->timestamps();
        });

        Schema::table('data_olah', function(Blueprint $kolom1){
          $kolom1->foreign('kabupaten_id')->references('id')->on('kabupaten')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('data_olah', function(Blueprint $kolom1){
          $kolom1->foreign('iterasi_id')->references('id')->on('iterasi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabupaten');
        Schema::dropIfExists('data_mentah');
        Schema::dropIfExists('data_olah');
        Schema::dropIfExists('iterasi');
    }
}
