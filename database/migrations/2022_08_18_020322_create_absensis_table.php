<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('status_id');
            $table->date('tanggal');
            $table->time('masuk');
            $table->time('keluar')->nullable();
            $table->string('evidence')->nullable();
            $table->string('detail')->nullable();
            $table->boolean('validate');
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('status_absensis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}
