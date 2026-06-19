<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('livros', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('autor');
        $table->integer('ano_publicacao');
        $table->string('genero');
        $table->timestamps();
    });
}
};
