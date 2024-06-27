<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code')->unique();
            $table->string('short')->unique();
            $table->string('disc');
            $table->foreignIdFor(\App\Models\SubModule::class)->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\Module::class)->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->string('view')->unique();
            $table->string('component')->unique();
            $table->string('eloquent')->nullable();
            $table->json('permissions')->nullable();
            $table->json('log')->nullable();
            $table->json('settings')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
