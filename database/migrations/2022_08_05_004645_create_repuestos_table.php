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
        Schema::create('repuestos', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->string("slug");
            $table->text("description");
            $table->string("stock");
            $table->string("price");

            $table->unsignedBigInteger("marca_id");
            $table->unsignedBigInteger("modelo_id");
            $table->unsignedBigInteger("categoria_id");
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign("marca_id")->references("id")->on("marcas")->onDelete("cascade");
            $table->foreign("modelo_id")->references("id")->on("modelos")->onDelete("cascade");
            $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade");

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
        Schema::dropIfExists('repuestos');
    }
};
