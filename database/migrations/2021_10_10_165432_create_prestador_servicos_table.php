<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestadorServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestador_servicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_prestador');
            $table->string('end_prestador');
            $table->string('telefone_prestador');
            $table->string('email_prestador')->unique();
            $table->string('cpf_prestador')->unique();
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
        Schema::dropIfExists('prestador_servicos');
    }
}
