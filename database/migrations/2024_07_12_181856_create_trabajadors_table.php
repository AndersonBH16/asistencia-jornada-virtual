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
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->id();           
            $table->string('codigo',8);          
            $table->unsignedTinyInteger('regimen_id');
            $table->unsignedTinyInteger('sede_id');
            $table->unsignedBigInteger('estructura_id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->boolean('estado');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('regimen_id')->references('id')->on('regimens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estructura_id')->references('id')->on('estructuras')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadors');
    }
};
