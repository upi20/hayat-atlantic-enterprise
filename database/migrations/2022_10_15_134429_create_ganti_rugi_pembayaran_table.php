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
        Schema::create('ganti_rugi_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ganti_rugi_id', false, true)->nullable()->default(null);
            $table->string('nama')->nullable()->default(null);
            $table->string('no_surat')->nullable()->default(null);
            $table->date('tanggal')->default(now());
            $table->string('oleh')->nullable()->default(null);
            $table->text('keterangan')->nullable()->default(null);
            $table->bigInteger('nominal')->nullable()->default(0);
            $table->bigInteger('pembayaran_sebelumnya')->nullable()->default(0);
            $table->bigInteger('dibayar')->nullable()->default(0);
            $table->bigInteger('sisa')->nullable()->default(0);
            $table->boolean('status')->default(1)->nullable()->comment("1 aktif, 0 dibatalkan");
            $table->text('pembatalan_alasan')->nullable()->default(null);
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
            $table->foreign('ganti_rugi_id')
                ->references('id')->on('ganti_rugi')
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
        Schema::dropIfExists('ganti_rugi_pembayaran');
    }
};
