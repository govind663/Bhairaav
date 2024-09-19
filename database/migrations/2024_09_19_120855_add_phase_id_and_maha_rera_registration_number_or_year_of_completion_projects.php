<?php

use App\Models\Phase;
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
        Schema::table('projects', function (Blueprint $table) {
            $table->text('phase_id')->nullable()->after('project_name')->index();
            $table->text('maha_rera_registration_number')->nullable()->after('phase_id');
            $table->string('year_of_completion')->nullable()->after('maha_rera_registration_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('phase_id');
            $table->dropColumn('maha_rera_registration_number');
            $table->dropColumn('year_of_completion');
        });
    }
};
