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
        Schema::create('ganti_rugi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penyewaan_id', false, true)->nullable()->default(null);
            $table->string('nama');
            $table->integer('no_surat')->default(1);
            $table->integer('jumlah_barang')->default(0);
            $table->integer('total_qty_barang')->default(0);
            $table->bigInteger('nominal', false, true)->nullable()->default(null);
            $table->bigInteger('dibayar', false, true)->nullable()->default(null);
            $table->bigInteger('sisa', false, true)->nullable()->default(null);
            $table->boolean('status')->default(0)->nullable()->comment("0 = data dibuat, 1 = proses, 2 = selesai");
            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            $table->foreign('updated_by')
                ->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('created_by')
                ->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('penyewaan_id')
                ->references('id')->on('penyewaan')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('ganti_rugi');
    }
};
