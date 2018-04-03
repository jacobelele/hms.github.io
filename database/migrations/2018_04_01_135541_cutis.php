<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cutis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cutis', function (Blueprint $table) {
          $table->increments('id');
          $table->string('id_karyawan');
          $table->string('name');
          $table->string('area');
          $table->string('jenis_cuti');
          $table->date('tanggal_awal_cuti');
          $table->date('tanggal_akhir_cuti');
          $table->string('file');
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
        //
    }
}
