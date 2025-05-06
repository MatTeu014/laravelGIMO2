<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id');
            $table->longtext('nome');
            $table->longtext('sobrenome');
            $table->longtext('email')->unique();
            $table->longtext('senha');
            $table->integer('idade');
            $table->integer('escola');
            $table->integer('idSerieFK')->unsigned()->nullable();
            $table->foreign('idSerieFK')->references('id')->on('series')->nullable();
            $table->integer('idTurmaFK')->unsigned()->nullable();
            $table->foreign('idTurmaFK')->references('id')->on('turmas')->nullable();
            $table->boolean('botaoA')->default(false);
            $table->boolean('botaoB')->default(false);
            $table->boolean('botaoC')->default(false);
            $table->boolean('botaoD')->default(false);
            $table->boolean('botaoE')->default(false);
            $table->boolean('botaoF')->default(false);
            $table->boolean('botaoG')->default(false);
            $table->boolean('botaoH')->default(false);
            $table->boolean('botaoI')->default(false);
            $table->boolean('botaoJ')->default(false);
            $table->boolean('botaoK')->default(false);
            $table->boolean('botaoL')->default(false);
            $table->boolean('botaoM')->default(false);
            $table->boolean('botaoN')->default(false);
            $table->boolean('botaoO')->default(false);
            $table->boolean('botaoP')->default(false);
            $table->boolean('botaoQ')->default(false);
            $table->boolean('botaoR')->default(false);
            $table->boolean('botaoS')->default(false);
            $table->boolean('botaoT')->default(false);
            $table->boolean('botaoU')->default(false);
            $table->boolean('botaoV')->default(false);
            $table->boolean('botaoW')->default(false);
            $table->boolean('botaoX')->default(false);
            $table->boolean('botaoY')->default(false);
            $table->boolean('botaoZ')->default(false);
            $table->boolean('botao0')->default(false);
            $table->boolean('botao1')->default(false);
            $table->boolean('botao2')->default(false);
            $table->boolean('botao3')->default(false);
            $table->boolean('botao4')->default(false);
            $table->boolean('botao5')->default(false);
            $table->boolean('botao6')->default(false);
            $table->boolean('botao7')->default(false);
            $table->boolean('botao8')->default(false);
            $table->boolean('botao9')->default(false);
            $table->boolean('botao10')->default(false);
            $table->integer('progressonumeros');
            $table->integer('progressoletras');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
