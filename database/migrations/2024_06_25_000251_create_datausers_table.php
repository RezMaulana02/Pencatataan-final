<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('datausers', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nama_makam');
        $table->decimal('jumlah_pembayaran', 8, 2);
        $table->string('status_pembayaran');
        $table->string('lokasi_makam');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('datausers');
}

};
