<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('wali_siswa');
            $table->date('tgl_lahir');
            $table->char('NIS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
