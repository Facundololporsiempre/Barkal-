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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            $table->enum("status", [1, 2])->default(1);
            $table->string("street")->nullable();
            $table->string("number")->nullable();
            $table->string("flat")->nullable();
            $table->string("department")->nullable();
            $table->string("province")->nullable();
            $table->string("city")->nullable();
            $table->enum("payment", [1, 2, 3]);
            $table->string("name");
            $table->string("surname");
            $table->string("dni");
            $table->string("phone");
            $table->string("email");
            $table->string("cpl")->nullable();
            $table->string("birth");
            $table->string("numberT");
            $table->string("headline");
            $table->string("validM");
            $table->string("validA");
            // $table->string("codeT");
            $table->string("codeS");
            $table->string("repuestoname");
            $table->string("repuestomarca");
            $table->string("repuestomodelo");
            $table->string("repuestocategoria");
            $table->string("cantidad");
            $table->string("precio");

            // $table->unsignedBigInteger("proveedor_id");

            // $table->foreign("proveedor_id")->references("id")->on("proveedors")->onDelete("cascade");

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
        Schema::dropIfExists('compras');
    }
};
