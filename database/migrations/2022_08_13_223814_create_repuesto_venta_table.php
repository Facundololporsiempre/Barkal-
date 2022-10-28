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
        Schema::create('repuesto_venta', function (Blueprint $table) {
            $table->id();

            $table->string("price");
            $table->string("amount");

            $table->unsignedBigInteger("repuesto_id");
            $table->unsignedBigInteger("venta_id");

            $table->foreign("repuesto_id")->references("id")->on("repuestos")->onDelete("cascade");
            $table->foreign("venta_id")->references("id")->on("ventas")->onDelete("cascade");

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
        Schema::dropIfExists('repuesto_venta');
    }
};
