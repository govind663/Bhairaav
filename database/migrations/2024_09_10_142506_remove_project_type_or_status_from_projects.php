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
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('project_type');
            $table->dropColumn('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('project_type')->nullable()->comment('1 - Residential Projects, 2 - Commercial Projects');
            $table->string('status')->nullable()->default('1')->comment('1 - Ongoing Projects, 2 - Completed Projects, 3 - Upcoming Projects');
        });
    }
};
