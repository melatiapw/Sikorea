<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('harga')->nullable();
            $table->integer('cart_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            //dibawah ini buat form kaos
            $table->integer('jenis_pakaian')->unsigned()->nullable();
            $table->integer('model')->unsigned()->nullable();
            $table->integer('bahan')->unsigned()->nullable();

            $table->integer('warna_bahan')->unsigned()->nullable();
            $table->string('pilihan_warna_bahan')->nullable();
            $table->integer('manset')->nullable();
            $table->integer('lengan')->nullable();

            $table->integer('sablon')->unsigned()->nullable();
            $table->integer('warna_sablon')->unsigned()->nullable();
            $table->string('pilihan_warna_sablon')->nullable();
            $table->integer('lokasi_sablon')->unsigned()->nullable();
            $table->integer('jumlah_bordir')->unsigned()->nullable();
            $table->integer('lokasi_bordir')->unsigned()->nullable();
            $table->integer('jumlah_produk')->unsigned()->nullable();
            $table->integer('jenis_ukuran')->unsigned()->nullable();
            $table->string('filename')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
