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
        Schema::create('ganti_rugi_barang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ganti_rugi_id', false, true)->nullable()->default(null);
            $table->bigInteger('barang', false, true)->nullable()->default(null);
            $table->string('no_surat')->nullable()->default(null);
            $table->date('tanggal')->default(now());
            $table->string('oleh')->nullable()->default(null);
            $table->bigInteger('qty')->nullable()->default(0);
            $table->text('keterangan')->nullable()->default(null);
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
            $table->foreign('barang')
                ->references('id')->on('barang')
                ->nullOnDelete()
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
        Schema::dropIfExists('ganti_rugi_barang');
    }
};
