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
        Schema::create('surat_jalan', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat_jalan')->nullable()->default(null);
            $table->string('penerima')->nullable()->default(null);
            $table->text('keterangan')->nullable()->default(null);
            $table->date('tanggal')->nullable()->default(null);
            $table->date('tanggal_kembali')->nullable()->default(null);
            $table->boolean('status')->nullable()->default(0)->comment('0 Pengambilan Dibuat, 1 Pengambilan Disimpan, 2 Barang Dikirim, 3 Pengembalian Disimpan');

            $table->bigInteger('penyewaan', false, true)->nullable()->default(null);
            $table->bigInteger('konfirmasi_oleh', false, true)->nullable()->default(null);
            $table->bigInteger('kirim_oleh', false, true)->nullable()->default(null);
            $table->bigInteger('kembali_oleh', false, true)->nullable()->default(null);
            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            $table->timestamps();
            $table->foreign('penyewaan')
                ->references('id')->on('penyewaan')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('updated_by')
                ->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('konfirmasi_oleh')
                ->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('kirim_oleh')
                ->references('id')->on('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('kembali_oleh')
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
        Schema::dropIfExists('surat_jalan');
    }
};
