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
    Schema::create('produks', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('kategori');
        $table->integer('qty');
        $table->integer('harga_beli');
        $table->integer('harga_jual');
        $table->timestamps(); // otomatis buat created_at dan updated_at
    });
}

};
