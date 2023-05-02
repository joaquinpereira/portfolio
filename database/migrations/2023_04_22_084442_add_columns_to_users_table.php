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
        Schema::table('users', function (Blueprint $table) {
            $table->text('about_short')->nullable()->after('password');
            $table->text('about_long')->nullable()->after('about_short');
            $table->string('telf')->nullable()->after('about_long');
            $table->text('avatar')->nullable()->after('telf');
            $table->string('profession')->nullable()->after('avatar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('about_short');
            $table->dropColumn('about_long');
            $table->dropColumn('telf');
            $table->dropColumn('avatar');
            $table->dropColumn('profession');
        });
    }
};
