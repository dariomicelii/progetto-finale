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
        Schema::table('records', function (Blueprint $table) {
            //Rimuoviamo la colonna genre
            $table->dropColumn('genre');

            //Aggiungiamo la colonna genre_id e la constraint
            $table->foreignId('genre_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('records', function (Blueprint $table) {
            //Ricreiamo la colonna genre
            $table->string('genre');

            //Eliminiamo la colonna genre_id e la constraint
            $table->dropForeign('records_genre_id_foreign');

            //eliminiamo la colonna
            $table->dropColumn('genre_id');
        });
    }
};
