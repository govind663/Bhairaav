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
        Schema::table('privacy_policies', function (Blueprint $table) {
            $table->renameColumn('changes', 'changing_privacy_policy');
            $table->text('changing_privacy_policy')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('privacy_policies', function (Blueprint $table) {
            $table->renameColumn('changing_privacy_policy', 'changes');
            $table->text('changes')->change();
        });
    }
};
