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
        Schema::create('surat_jalan_barang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('barang', false, true)->nullable()->default(null);
            $table->integer('qty')->nullable()->default(0);
            $table->integer('pengembalian_qty')->nullable()->default(0);
            $table->integer('pengembalian_hilang')->nullable()->default(0);
            $table->integer('pengembalian_rusak')->nullable()->default(0);
            $table->bigInteger('surat_jalan', false, true)->nullable()->default(null);
            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('surat_jalan')
                ->references('id')->on('surat_jalan')
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
        Schema::dropIfExists('surat_jalan_barang');
    }
};
