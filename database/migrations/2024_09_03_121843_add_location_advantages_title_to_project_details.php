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
            $table->string('location_advantages_title')->nullable()->after('project_location_advantages_id');
            $table->string('amenities_title')->nullable()->after('project_amenities_id');
            $table->string('gallery_title')->nullable()->after('project_gallery_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project_details', function (Blueprint $table) {
            $table->dropColumn('location_advantages_title');
            $table->dropColumn('amenities_title');
            $table->dropColumn('gallery_title');
        });
    }
};
