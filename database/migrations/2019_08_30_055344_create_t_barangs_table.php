<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('stok')->nullable()->unsigned();
            $table->integer('harga_jual')->nullable()->unsigned();
            $table->integer('harga_beli')->nullable()->unsigned();
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
        Schema::dropIfExists('t_barangs');
    }
}
