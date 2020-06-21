<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonKadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_kades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_urut')->unique();
            $table->string('nama_calon');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->set('kelamin', ['Laki-Laki', 'Perempuan']);
            $table->set('agama', ['Islam', 'Kristen', 'Hindu', 'Budha', 'Katholik']);
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('organisasi')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_kades');
    }
}
