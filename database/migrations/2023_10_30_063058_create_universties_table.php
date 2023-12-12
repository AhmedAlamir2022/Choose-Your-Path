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
        Schema::create('universties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email')->unique();
            $table->text('short_desc');
            $table->text('long_desc');
            $table->string('contact');
            $table->text('address');
            $table->string('country');
            $table->string('city');
            $table->string('website');
            $table->string('image1');
            $table->string('image2');
            $table->string('facebook')->nullable();
            $table->string('instgram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universties');
    }
};
