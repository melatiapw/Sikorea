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
            $table->integer('harga');
            $table->integer('cart_id')->unsigned();
            $table->integer('product_id')->unsigned();
            //dibawah ini buat form kaos
            $table->integer('jenis_pakaian')->unsigned
            ();
            $table->integer('model')->unsigned();
            $table->integer('bahan')->unsigned();

            $table->integer('warna_bahan')->unsigned();
            $table->string('pilihan_warna_bahan');            
            $table->integer('manset');
            $table->integer('lengan');

            $table->integer('sablon')->unsigned();
            $table->integer('warna_sablon')->unsigned();
            $table->string('pilihan_warna_sablon');

            $table->integer('lokasi_sablon')->unsigned();
            $table->integer('bordir')->unisgned();
            $table->integer('jumlah_bordir')->unsigned();
            $table->integer('jumlah_produk')->unsigned();
            $table->integer('jenis_ukuran')->unsigned();
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
