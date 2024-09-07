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
        Schema::table('strengths', function (Blueprint $table) {
            $table->renameColumn('description', 'icon_name');
            $table->string('icon_name')->change(); // Change data type
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('strengths', function (Blueprint $table) {
            $table->renameColumn('icon_name', 'description');
            $table->integer('description')->change(); // Revert to original type
        });
    }
};
