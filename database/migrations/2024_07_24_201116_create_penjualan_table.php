<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id'); // Primary key
            $table->unsignedInteger('pembelian_id');
            $table->integer('jumlah_jual');
            $table->decimal('harga_jual', 15, 2);
            $table->decimal('total_harga', 15, 2);
            $table->decimal('keuntungan', 15, 2);
            $table->timestamps();

            $table->foreign('pembelian_id')->references('id')->on('pembelian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
