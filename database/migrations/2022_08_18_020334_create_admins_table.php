<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('status_id');
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('alamat');
            $table->string('divisi');
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('status_pekerjaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
