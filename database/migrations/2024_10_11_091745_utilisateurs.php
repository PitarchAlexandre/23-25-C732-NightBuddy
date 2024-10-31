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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id('uti_id');
            $table->string('uti_nom');
            $table->string('uti_prenom');
            $table->string('uti_email')->unique();
            $table->string('uti_mdp');
            $table->string('uti_role');
            $table->string('uti_adresse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
