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
        Schema::table('location_advantages', function (Blueprint $table) {
            // add feature_name after title
            $table->string('feature_name')->after('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('location_advantages', function (Blueprint $table) {
            $table->dropColumn('feature_name');
        });
    }
};
