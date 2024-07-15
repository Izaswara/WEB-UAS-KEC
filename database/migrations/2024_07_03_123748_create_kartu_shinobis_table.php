<?php

// database/migrations/xxxx_xx_xx_create_kartu_shinobis_table.php
public function up()
{
    Schema::create('kartu_shinobis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('jutsu');
        $table->string('desa');
        $table->timestamps();
    });
}
