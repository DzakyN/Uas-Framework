<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('kodeBarang'); // Primary key
            $table->string('namaBarang');
            $table->enum('satuan', ['satuan', 'dus']);
            $table->enum('jenisBarang', ['makanan', 'minuman', 'pendidikan']);
            $table->integer('hargaBeli');
            $table->integer('hargaJual');
            $table->integer('stok');
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
        Schema::dropIfExists('barang');
    }
}
