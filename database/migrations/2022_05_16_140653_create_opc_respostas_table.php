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
        Schema::create('opc_respostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pergunta');
            $table->foreign('id_pergunta')->references('id')->on('perguntas');
            $table->text('txt_opc_resposta');
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
        Schema::dropIfExists('opc_respostas');
    }
};


