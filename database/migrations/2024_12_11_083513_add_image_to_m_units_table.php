<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('m_units', function (Blueprint $table) {
            $table->string('gambar_unit')->nullable();
        });
    }

    public function down()
    {
        Schema::table('m_units', function (Blueprint $table) {
            $table->dropColumn('gambar_unit');
        });
    }
};