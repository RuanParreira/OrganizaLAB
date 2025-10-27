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
        Schema::table('clients', function (Blueprint $table) {
            // Remove o índice unique antigo do cpf_cnpj
            $table->dropUnique(['cpf_cnpj']);

            // Cria um índice composto unique para cpf_cnpj + user_id
            $table->unique(['cpf_cnpj', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            // Remove o índice composto
            $table->dropUnique(['cpf_cnpj', 'user_id']);

            // Restaura o índice único simples
            $table->unique('cpf_cnpj');
        });
    }
};
