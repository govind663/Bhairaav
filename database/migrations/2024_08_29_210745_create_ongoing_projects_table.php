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
        Schema::create('ongoing_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->text('address')->nullable();
            $table->string('configuration')->nullable();
            $table->string('image')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('project_type')->nullable()->comment('1 - Residential Projects, 2 - Commercial Projects');
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
        Schema::dropIfExists('ongoing_projects');
    }
};
