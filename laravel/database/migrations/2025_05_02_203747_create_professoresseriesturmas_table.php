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
        Schema::create('professoresseriesturmas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idProfessorFK')->unsigned()->nullable();
            $table->foreign('idProfessorFK')->references('id')->on('professores')->nullable();
            $table->integer('idSerieFK')->unsigned()->nullable();
            $table->foreign('idSerieFK')->references('id')->on('series')->nullable();
            $table->integer('idTurmaFK')->unsigned()->nullable();
            $table->foreign('idTurmaFK')->references('id')->on('turmas')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professoresseriesturmas');
    }
};
