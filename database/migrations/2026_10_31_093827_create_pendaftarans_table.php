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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('pendaftarans');
    }
};


{
    Schema::create('pendaftarans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('nisn')->unique();
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->string('sekolah_asal');
        $table->string('nama_ortu');
        $table->string('whatsapp');
        $table->string('email')->nullable();
        $table->string('pekerjaan_ortu')->nullable();
        $table->text('alamat');
        $table->string('password');
        $table->enum('status', ['Pending', 'Diterima', 'Ditolak'])->default('Pending');
        $table->timestamps();
    });
}