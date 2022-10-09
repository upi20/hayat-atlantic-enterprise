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
            $table->date('tanggal_kirim')->nullable()->default(null);
            $table->date('tanggal_pakai_dari')->nullable()->default(null);
            $table->date('tanggal_pakai_sampai')->nullable()->default(null);
            $table->string('kepada')->nullable()->default(null);
            $table->date('tanggal')->nullable()->default(null);
            $table->boolean('status')->nullable()->default(1)->comment("1 = Penyewaan Dibuat, 2 = Faktur Dibuat, 3 = Barang Diambil, 4 = Barang Dikembalikan, 5 = Selesai, 9 Dibatalkan");
            $table->bigInteger('total_harga', false, true)->default(0);
            $table->bigInteger('dibayar', false, true)->default(0);
            $table->boolean('status_pembayaran')->nullable()->default(0)->comment("1 selesai 0 belum");
            $table->text('batal_keterangan')->nullable()->default(null);
            $table->dateTime('batal_tanggal')->nullable()->default(null);
            $table->bigInteger('batal_oleh', false, true)->nullable()->default(null);

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
            $table->foreign('batal_oleh')
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
