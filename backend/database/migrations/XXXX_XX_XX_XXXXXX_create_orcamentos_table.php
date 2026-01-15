<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('celular');
            $table->date('data_ida')->nullable();
            $table->date('data_volta')->nullable();
            $table->string('origem')->nullable();
            $table->string('destino')->nullable();
            $table->string('quarto_infantil')->nullable();
            $table->string('piscina')->nullable();
            $table->string('wifi')->nullable();
            $table->string('garagem')->nullable();
            $table->string('suite')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orcamentos');
    }
};
