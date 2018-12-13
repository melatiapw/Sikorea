<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', ['1', '2', '3', '4'])->default('1'); //1-belum checkout, 2-checkout+proses, 3-checkout+confirmed, 4-tolak
            $table->string('total_harga');
            $table->integer('users')->unsigned();
            $table->string('alamat_cp');
            $table->string('no_cp'); 
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
        Schema::dropIfExists('cart');
    }
}
