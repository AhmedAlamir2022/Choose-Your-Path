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
        Schema::create('note12s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student12_id')->references('id')->on('student12s')->onDelete('cascade');
            $table->foreignId('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->text('note');
            $table->text('admin_replay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note12s');
    }
};
