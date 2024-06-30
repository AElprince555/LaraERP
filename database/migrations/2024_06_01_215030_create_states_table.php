<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('short')->nullable();
            $table->foreignIdFor(\App\Models\General\World\Country::class)->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->json('permissions')->nullable();
            $table->json('log')->nullable();
            $table->json('settings')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('states');
    }
};
