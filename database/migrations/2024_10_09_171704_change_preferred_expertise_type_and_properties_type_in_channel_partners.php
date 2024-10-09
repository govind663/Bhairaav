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
        Schema::table('channel_partners', function (Blueprint $table) {
            // change column Type which name is (preferredExpertise_type , propertiesType)
            $table->string('preferredExpertise')->change();
            $table->string('propertiesType')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('channel_partners', function (Blueprint $table) {
            $table->dropColumn('preferredExpertise');
            $table->dropColumn('propertiesType');
        });
    }
};
