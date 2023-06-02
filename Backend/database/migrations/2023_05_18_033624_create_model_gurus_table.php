<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru')->unique();
            $table->string('id_mapel');
            $table->string('username_guru')->unique();
            $table->string('password_guru')->unique();
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
        Schema::dropIfExists('model_gurus');
    }
}
