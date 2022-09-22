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
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer', false, true)->nullable()->default(null);
            $table->text('lokasi')->nullable()->default(null);
            $table->date('tanggal_pakai_dari')->nullable()->default(null);
            $table->date('tanggal_pakai_sampai')->nullable()->default(null);
            $table->string('kepada')->nullable()->default(null);
            $table->dateTime('tanggal_order')->nullable()->default(null);
            $table->boolean('status')->nullable()->default(1)->comment("1 Faktur penyewaan dibuat, 2 Barang dipilih, 3 Barang Disiapkan Oleh Warehouse, 4 Barang Diabil Oleh delevery, 5 barang dikembalikan oleh delever");
            $table->boolean('status_pembayaran')->nullable()->default(0)->comment("1 selesai 0 belum");

            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('customer')
                ->references('id')->on('customers')
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
        Schema::dropIfExists('penyewaan');
    }
};