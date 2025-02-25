<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('idea_id')->constrained('ideas')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['user_id', 'idea_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};