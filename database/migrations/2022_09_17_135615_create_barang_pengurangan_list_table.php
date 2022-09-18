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
        Schema::create('barang_pengurangan_list', function (Blueprint $table) {
            $table->id();
            $table->integer('harga');
            $table->integer('qty');

            $table->bigInteger('barang', false, true);
            $table->bigInteger('pengurangan', false, true);
            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            // realtion
            $table->foreign('barang')->references('id')->on('barang')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('pengurangan')->references('id')->on('barang_pengurangan')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('updated_by')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('barang_pengurangan_list');
    }
};
