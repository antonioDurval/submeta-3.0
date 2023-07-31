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
        Schema::create('users_proponentes', function (Blueprint $table) {
            $table->id();
            $table->string("siape")->nullable();
            $table->string("vinculo");
            $table->string("ano_titulacao");
            $table->string("area_formacao");
            $table->string("bolsista_produtivadade");
            $table->foreignId('niveis_proponente_id');
            $table->foreignId('users_id');
            $table->foreignId('titulacoes_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_proponentes');
    }
};
