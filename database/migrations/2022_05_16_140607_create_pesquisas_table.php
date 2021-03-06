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
        Schema::create('pesquisas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('titulo');
            $table->string('url_slug');
            $table->timestamp('pesquisa_inicio')->nullable();
            $table->timestamp('pesquisa_final')->nullable();
            $table->integer('perguntas_por_tela');
            $table->boolean('pag_apresentacao')->nullable();
            $table->text('txt_pag_apresentacao')->nullable();
            $table->boolean('consentimento')->nullable();
            $table->text('txt_consentimento')->nullable();
            $table->string('bgimage')->nullable();
            $table->string('bgcor')->nullable();
            $table->string('txtcor')->nullable();
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
        Schema::dropIfExists('pesquisas');
    }
};