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
        Schema::create('tbl_suplier', function (Blueprint $table) {
            $table->id();
            $table->string('id_suplier');
            $table->string('suplier_nama');
            $table->string('suplier_alamat');
            $table->string('suplier_phone');
            $table->string('suplier_status');
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
        Schema::dropIfExists('tbl_suplier');
    }
};
