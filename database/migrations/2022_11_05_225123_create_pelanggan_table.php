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
    {Schema::create('pelanggan', function (Blueprint $table) {
        $table->increments('pelanggan');
        $table->string('pelanggan');
        $table->enum('jeniskelamin',['p','l'])->default('p');
        $table->string('alamat');
        $table->string('telepon');
        $table->string('email');
        $table->string('password');
        $table->timestamps();
    });    
}
/**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
};