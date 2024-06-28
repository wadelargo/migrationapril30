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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Adding 'name' attribute of type string
            $table->text('remarks')->nullable(); // Adding 'remarks' attribute of type text (nullable)
            $table->string('owner')->nullable(); // Adding 'owner' attribute of type string (nullable)
            $table->string('head_coach')->nullable(); // Adding 'head_coach' attribute of type string (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
