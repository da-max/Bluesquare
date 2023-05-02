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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->unique();
        });

        Schema::create('projets_users', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Project::class, 'projet_id');
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
            $table->primary(['projet_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('projets_users');
    }
};
