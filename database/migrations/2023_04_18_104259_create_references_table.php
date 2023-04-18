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
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('telf');
            $table->string('picture')->nullable();
            $table->string('web_company')->nullable();
            $table->string('testimonial')->nullable();
            $table->boolean('show_cv')->default(false);
            $table->boolean('show_portfolio')->default(false);
            $table->text('translations')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
