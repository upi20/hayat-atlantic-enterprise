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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik', 16)->unique();
            $table->text('alamat')->nullable()->default(null);
            $table->string('no_telepon')->nullable()->default(null);
            $table->integer('awal_masuk_kerja')->nullable()->default(null);
            $table->string('status_kontrak')->nullable()->default(null);
            $table->string('username')->unique()->nullable()->default(null);
            $table->string('password');
            $table->date('tgl_lahir')->nullable()->default(null);

            $table->string('email')->unique()->nullable()->default(null);
            $table->string('jenis_kelamin', 1)->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->boolean('active')->nullable()->default(null);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
