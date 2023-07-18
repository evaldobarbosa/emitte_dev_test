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
        Schema::create('empresas', function($table) {
            $table->id();
            
            $table->string('razao_social', 255);
            $table->string('cnpj', 14);
            
            $table->timestamps();
        });

        Schema::create('empresa_usuarios', function($table) {
            $table->id();
            
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('empresa_id')->constrained('empresas');
            
            $table->timestamps();
        });

        Schema::create('notas_fiscais', function($table) {
            $table->id();
            
            $table->string('numero', 25);
            $table->float('total');

            $table->json('informacoes')->default('{}');

            $table->foreignId('empresa_id')->constrained('empresas');

            $table->datetime('processada_em')->nullable();

            $table->timestamps();
        });

        Schema::create('nota_fiscal_itens', function($table) {
            $table->id();
            
            $table->string('produto', 255);
            $table->integer('quantidade');
            $table->float('valor');

            $table->json('informacoes')->default('{}');

            $table->foreignId('nota_fiscal_id')->constrained();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_fiscal_itens');
        Schema::dropIfExists('notas_fiscais');
        Schema::dropIfExists('empresa_usuarios');
        Schema::dropIfExists('empresas');

    }
};
