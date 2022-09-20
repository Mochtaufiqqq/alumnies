<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nis')->unique();
            $table->string('email')->unique();
            $table->string('pekerjaan');
            // $table->string('jenis_kelamin');
            $table->string('alamat')->nullable();
            $table->year('tahun_keluar')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('foto')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('alumnis');
    }
};
