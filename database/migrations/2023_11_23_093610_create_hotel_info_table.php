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
        Schema::create('hotel_info', function (Blueprint $table) {
            $table->id();
            $table->string('nom_hotel');
            $table->text('description_hotel');
            $table->string('nom_chambre');
            $table->decimal('prix', 10, 2);
            $table->integer('nombre_lits');
            $table->integer('max_adultes');
            $table->integer('max_enfants');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_info');
    }
};
