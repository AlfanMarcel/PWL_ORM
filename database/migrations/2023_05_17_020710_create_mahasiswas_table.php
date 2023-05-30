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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('Nim', 12)->primary();
            $table->string('Nama', 30);
            $table->string('Kelas', 10);
            $table->string('Jurusan', 30);
            $table->string('No_Handphone');
            $table->string('Email', 255);
            $table->date('TTL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
