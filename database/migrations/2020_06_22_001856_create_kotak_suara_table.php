<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotakSuaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotak_suara', function (Blueprint $table) {
            $table->id();
            $table->integer('no_urut')->unique();
            $table->string('nama_calon');
            $table->string('organisasi')->nullable();
            $table->string('jumlah_suara')->nullable();
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
        Schema::dropIfExists('kotak_suara');
    }
}
