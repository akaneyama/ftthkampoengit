<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('userftth', function (Blueprint $table) {
            $table->increments('id_user_ftth');
            $table->string('nama_user_ftth',255);
            $table->string('alamat_user_ftth',255);
            $table->string('nomor_telp',20);
            $table->string('ip_address',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userftth');
    }
};
