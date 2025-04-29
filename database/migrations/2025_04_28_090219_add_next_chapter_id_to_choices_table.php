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
        Schema::table('choices', function (Blueprint $table) {
            $table->unsignedBigInteger('next_chapter_id')->nullable(); // Clé étrangère vers le chapitre suivant
            $table->foreign('next_chapter_id')->references('id')->on('chapters')->onDelete('set null');
            $table->text('content')->nullable(); // Ajout de la colonne content

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('choices', function (Blueprint $table) {
            $table->dropForeign(['next_chapter_id']); // Suppression de la contrainte de clé étrangère
            $table->dropColumn('next_chapter_id');   // Suppression de la colonne
            $table->dropColumn('content');          // Suppression de la colonne content

        });
    }
};
