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
        Schema::create('table_warga', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->enum('jenis_kelamin',['pria','wanita']);
            $table->text('alamat');
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
        Schema::dropIfExists('table_warga');
    }
};
