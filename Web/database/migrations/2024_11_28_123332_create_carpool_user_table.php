<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('carpool_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carpool_id')->constrained('carpools')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();

            // Assurer qu'un utilisateur ne soit inscrit qu'une seule fois par covoiturage
            $table->unique(['carpool_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carpool_user');
    }
};
