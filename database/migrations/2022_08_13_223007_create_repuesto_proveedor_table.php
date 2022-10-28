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
        Schema::create('repuesto_proveedor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("repuesto_id");
            $table->unsignedBigInteger("proveedor_id");

            $table->foreign("repuesto_id")->references("id")->on("repuestos")->onDelete("cascade");
            $table->foreign("proveedor_id")->references("id")->on("proveedors")->onDelete("cascade");

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
        Schema::dropIfExists('repuesto_proveedor');
    }
};
