<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('m_units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name_unit');
            $table->string('type_unit')->nullable();
            $table->string('lt_unit')->nullable();
            $table->decimal('luas_tanah_unit', 10, 2)->nullable();
            $table->decimal('luas_bangunan_unit', 10, 2)->nullable();
            $table->text('deskripsi_1_unit')->nullable();
            $table->text('deskripsi_2_unit')->nullable();
            $table->text('deskripsi_3_unit')->nullable();
            $table->text('deskripsi_4_unit')->nullable();
            $table->text('deskripsi_5_unit')->nullable();
            $table->text('deskripsi_6_unit')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_units');
    }
};