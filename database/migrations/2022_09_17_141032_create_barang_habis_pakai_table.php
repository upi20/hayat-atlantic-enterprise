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
        Schema::create('barang_habis_pakai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kode', 8);
            $table->bigInteger('jenis', false, true)->nullable()->default(null);;
            $table->bigInteger('satuan', false, true)->nullable()->default(null);;
            $table->bigInteger('harga', false, true)->default(0);
            $table->integer('qty')->default(0);
            $table->text('keterangan')->nullable()->default(null);
            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);

            $table->foreign('jenis')
                ->references('id')->on('barang_jenis')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('satuan')
                ->references('id')->on('barang_satuan')
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
        Schema::dropIfExists('barang_habis_pakai');
    }
};
