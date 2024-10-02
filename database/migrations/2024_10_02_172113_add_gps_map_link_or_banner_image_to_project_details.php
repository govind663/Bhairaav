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
        Schema::table('project_details', function (Blueprint $table) {
            // ==== gps_link and project_image after location_advantages_title
            $table->string('gps_link')->after('location_advantages_title')->nullable();
            $table->string('project_image')->after('gps_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project_details', function (Blueprint $table) {
            // ==== drop gps_link and project_image
            $table->dropColumn('gps_link');
            $table->dropColumn('project_image');
        });
    }
};
