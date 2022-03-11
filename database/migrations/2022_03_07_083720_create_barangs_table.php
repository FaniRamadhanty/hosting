<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nama_kategori');
            $table->string('nama_barang');
            $table->string('cover')->nullable();
            $table->integer('harga');
            $table->integer('stok');
            $table->string('keterangan');
            $table->foreign('nama_kategori')->references('id')
                ->on('kategoris')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('barangs');
    }
}
