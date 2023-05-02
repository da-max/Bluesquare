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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('description');
            $table->longText('contexte');
            $table->string('url');
            $table->string('browser');
            $table->string('os');
            $table->foreignIdFor(\App\Models\Project::class, 'projet_id');
            $table->foreignIdFor(\App\Models\Status::class, 'status_id');
            $table->foreignIdFor(\App\Models\Priority::class, 'priority_id');
            $table->foreignIdFor(\App\Models\Type::class, 'type_id');
            $table->foreignIdFor(\App\Models\User::class, 'creator_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
