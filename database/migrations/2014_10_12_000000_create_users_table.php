<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedInteger('roles_id')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('roles', function(Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('namaRule');
        });

        Schema::table('users', function(Blueprint $kolom){
          $kolom->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('roles')->insert(
          ['id'=>1,'namaRule'=>'Super Admin']
        );
        DB::table('roles')->insert(
          ['id'=>2,'namaRule'=>'Admin']
        );

        DB::table('users')->insert([
        'name' => 'Kal Kausar',
        'email' => 'kalkausar98@gmail.com',
        'roles_id' => 2,
        'password' => '$2y$10$TbdH.YaRm9rnssSjLlcrbeOGpsU5VeeBxWGBaIGKNaoqKAnoRUTUa',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
}
