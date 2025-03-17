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
        Schema::create('regismobile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_lengkap', 50);
            $table->string('username', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('date');
            $table->string('gender', 50);
            $table->string('no_hp');
            $table->string('alamat', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regismobile');
    }
};
