<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_barang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pesanan_id', false, true)->nullable()->default(null);
            $table->bigInteger('barang_id', false, true)->nullable()->default(null);
            $table->integer('qty')->nullable()->default(0);
            $table->integer('stok')->nullable()->default(0);
            $table->integer('harga')->nullable()->default(0);
            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            $table->timestamps();


            $table->foreign('pesanan_id')
                ->references('id')->on('pesanan')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('barang_id')
                ->references('id')->on('barang')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('updated_by')
                ->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('created_by')
                ->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_barang');
    }
};
