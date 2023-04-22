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
            $table->text('address')->nullable()->after('about_long');
            $table->string('telf')->nullable()->after('address');
            $table->text('avatar')->nullable()->after('telf');
            $table->string('profession')->nullable()->after('avatar');
            $table->string('zip_code')->nullable()->after('profession');
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
            $table->dropColumn('address');
            $table->dropColumn('telf');
            $table->dropColumn('avatar');
            $table->dropColumn('profession');
            $table->dropColumn('telf');
            $table->dropColumn('zip_code');
        });
    }
};
