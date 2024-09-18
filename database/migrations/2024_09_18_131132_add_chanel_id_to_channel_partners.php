<?php

use App\Models\Chanel;
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
            // ==== add ForienIdFor chanel
            $table->foreignIdFor(Chanel::class)->nullable()->after('brokerAffiliation')->constrained()->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('channel_partners', function (Blueprint $table) {
            $table->dropConstrainedForeignId('chanel_id');
        });
    }
};
