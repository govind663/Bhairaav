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
        Schema::table('our_teams', function (Blueprint $table) {
            // Add profile_image column after name
            $table->string('profile_image')->after('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_teams', function (Blueprint $table) {
            // drop profile_image column
            $table->dropColumn('profile_image');
        });
    }
};
