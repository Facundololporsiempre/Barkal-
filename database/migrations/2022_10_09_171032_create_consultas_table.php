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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("response")->nullable();
            // $table->string("slug");
            $table->string('email');
            $table->string("phone")->nullable();
            $table->longText("query");

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
        Schema::dropIfExists('consultas');
    }
};
