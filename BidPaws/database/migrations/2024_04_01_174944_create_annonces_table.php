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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('price');
            $table->string('location');
            $table->integer('age'); 
            $table->json('image')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'refused'])->default('pending');
            $table->foreignIdFor('user')->constrained()->onDelete('cascade');
            $table->integer('views')->default(0);
          


            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
