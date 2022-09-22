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
        Schema::create('pengembalian_barang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengembalian', false, true)->nullable()->default(null);
            $table->bigInteger('barang', false, true)->nullable()->default(null);

            $table->integer('qty')->nullable()->default(0);
            $table->integer('qty_hilang')->nullable()->default(0);
            $table->integer('qty_rusak')->nullable()->default(0);
            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('pengembalian')
                ->references('id')->on('pengembalian')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('barang')
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
        Schema::dropIfExists('pengembalian_barang');
    }
};
