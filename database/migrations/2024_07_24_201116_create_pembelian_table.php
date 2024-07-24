
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id'); // Primary key
            $table->unsignedInteger('barang_id');
            $table->unsignedInteger('supplier_id'); // Tambahkan kolom supplier_id
            $table->integer('total_beli');
            $table->decimal('total_harga', 15, 2);
            $table->timestamps();

            $table->foreign('barang_id')->references('kodeBarang')->on('barang')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
