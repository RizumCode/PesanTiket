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
    Schema::create('tickets', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nomor_id');
        $table->string('nama');
        $table->date('tanggal_lahir');
        $table->string('alamat');
        $table->timestamps();
    });
    
    Schema::table('tickets', function (Blueprint $table) {
        $table->string('nomor_id_tiket')->unique()->after('nomor_id');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
