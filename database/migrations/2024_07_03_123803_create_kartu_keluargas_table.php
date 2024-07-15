<?php

// database/migrations/xxxx_xx_xx_create_kartu_keluargas_table.php
public function up()
{
    Schema::create('kartu_keluargas', function (Blueprint $table) {
        $table->id();
        $table->string('kepala_keluarga');
        $table->integer('jumlah_anggota');
        $table->string('alamat');
        $table->timestamps();
    });
}
