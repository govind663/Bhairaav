<?php

use App\Models\ProjectAmenities;
use App\Models\ProjectGallery;
use App\Models\ProjectHallmarks;
use App\Models\ProjectLocationAdvantages;
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
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->integer('project_type_id')->nullable()->comment('
            1 - Ongoing Projects,
            2 - Completed Projects,
            3 - Upcoming Projects
            ');
            $table->integer('project_name_id')->nullable();
            $table->text('banner_image')->nullable();
            $table->string('maha_rera_registration_number')->nullable();
            $table->string('project_link')->nullable();
            $table->string('overview_image')->nullable();
            $table->text('project_description')->nullable();
            $table->text('project_hallmarks_id')->nullable();
            $table->text('project_location_advantages_id')->nullable();
            $table->text('project_amenities_id')->nullable();
            $table->text('project_gallery_id')->nullable();
            $table->integer('inserted_by')->nullable();
            $table->timestamp('inserted_at')->nullable();
            $table->integer('modified_by')->nullable();
            $table->timestamp('modified_at')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_details');
    }
};
