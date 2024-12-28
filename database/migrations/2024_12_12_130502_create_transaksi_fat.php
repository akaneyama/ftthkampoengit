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
        Schema::create('transaksi_fat', function (Blueprint $table) {
            $table->increments('id_trans_fat');
            $table->unsignedInteger('id_user_ftth');
            $table->unsignedInteger('id_olt');
            $table->unsignedInteger('id_odc');
            $table->unsignedInteger('id_fat');
            $table->unsignedInteger('id_odp');
            $table->string('warna_kabel',255);
            $table->timestamps();
            
            // Foreign keys
            // Foreign keys
        $table->foreign('id_user_ftth')->references('id_user_ftth')->on('userftth')->onDelete('cascade');
        $table->foreign('id_olt')->references('id_olt')->on('olt')->onDelete('cascade');
        $table->foreign('id_odc')->references('id_odc')->on('odc')->onDelete('cascade');
        $table->foreign('id_fat')->references('id_fat')->on('fat')->onDelete('cascade');
        $table->foreign('id_odp')->references('id_odp')->on('odp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_fat');
    }
};
