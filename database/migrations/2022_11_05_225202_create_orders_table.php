<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {Schema::create('order', function (Blueprint $table) {
        $table->string('idorder')->primary();
        $table->integer('idpelanggan');
        $table->date('tglorder');
        $table->float('total');
        $table->float('bayar');
        $table->float('kembali');
        $table->timestamps();
    });    
}
/**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};