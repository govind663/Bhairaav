<?php

use App\Models\LocationAdvantage;
use App\Models\ProjectDetails;
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
        Schema::create('project_location_advantages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProjectDetails::class)->nullable()->index();
            $table->string('title')->nullable();
            $table->foreignIdFor(LocationAdvantage::class)->nullable()->index();
            $table->string('feature_value')->nullable();
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
        Schema::dropIfExists('project_location_advantages');
    }
};
