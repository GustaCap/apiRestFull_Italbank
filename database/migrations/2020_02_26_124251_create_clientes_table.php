<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('tokenCliente', 100)->unique();
            $table->string('apiToken');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('cedula', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('tipocliente_id');
            $table->foreign('tipocliente_id')->references('id')->on('tipoclientes')->onDelete('cascade');
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
        Schema::dropIfExists('clientes');
    }
}
