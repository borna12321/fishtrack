<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fish_catches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fish_id')->references('id')->on('fish');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('weight');
            $table->string('lure');
            $table->string('style');
//            $table->date('date');
//            $table->string('time')->default('123');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fish_catches');
    }
};
