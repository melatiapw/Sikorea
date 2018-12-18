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
            $table->enum('status', ['1', '2', '3', '4', '5'])->nullable(); //1-belum checkout, 2-checkout+proses, 3-checkout+confirmed, 4-tolak
            $table->string('total_harga')->nullable();
            $table->integer('users')->unsigned()->nullable();
            $table->string('alamat_cp')->nullable();
            $table->string('no_cp')->nullable();
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
