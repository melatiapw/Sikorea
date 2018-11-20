<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateFormTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pakaian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jenis_pakaian');
            $table->timestamps();
        });
        Schema::create('model', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_model');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('bahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bahan');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('warna_bahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_warna_bahan');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('manset', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_manset');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('sablon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sablon');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('warna_sablon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_warna_sablon');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('lokasi_sablon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lokasi_sablon');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('bordir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bordir');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('lokasi_bordir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lokasi_bordir');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('jumlah_kaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jumlah_produk');
            $table->string('harga');
            $table->timestamps();
        });
        Schema::create('jenis_ukuran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jenis_ukuran');
            $table->string('harga');
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
        Schema::dropIfExists('jenis_pakaian');
        Schema::dropIfExists('model');
        Schema::dropIfExists('bahan');
        Schema::dropIfExists('warna_bahan');
        Schema::dropIfExists('manset');
        Schema::dropIfExists('sablon');
        Schema::dropIfExists('warna_sablon');
        Schema::dropIfExists('lokasi_sablon');
        Schema::dropIfExists('jenis_pakaian');
        Schema::dropIfExists('bordir');
        Schema::dropIfExists('lokasi_bordir');
        Schema::dropIfExists('jumlah_kaos');
        Schema::dropIfExists('jenis_ukuran');
    }
}
