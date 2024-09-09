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
        Schema::create('channel_partners', function (Blueprint $table) {
            $table->id();
            $table->string('companyNameOrIndividualName')->nullable();
            $table->string('nameOfTheOwner')->nullable();
            $table->integer('entity')->nullable()->comment('
            1 - Individual,
            2 - Private Ltd. Co.,
            3 - Public Ltd. Co.,
            4 - Proprietorship,
            5 - Partnership,
            6 - LLP
            ');
            $table->string('officeAddress')->nullable();
            $table->string('telephoneNumber')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('website')->nullable();
            $table->string('emailId')->nullable();
            $table->string('numberOfYearsInOperation')->nullable();
            $table->integer('preferredExpertise')->nullable()->comment('
            1 - Residential,
            2 - Commercial,
            3 - Retail,
            4 - Industrial Land,
            5 - Other
            ');
            $table->string('panCardNo')->nullable();
            $table->string('gstNo')->nullable();
            $table->string('reraNo')->nullable();
            $table->integer('brokerAffiliation')->nullable()->comment('
            1 - Yes,
            2 - No
            ');
            $table->integer('propertiesType')->nullable()->comment('
            1 - Goldcrest Residency,
            2 - Jewel of Queen,
            3 - TCP Corporate Park,
            4 - Bhairaav Milestone,
            5 - Other
            ');
            $table->integer('authorizedSignatories')->nullable()->comment('
            1 - Single,
            2 - Jointly,
            3 - Anyone,
            ');
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('pancard_doc')->nullable();
            $table->string('aadhar_doc')->nullable();
            $table->boolean('terms')->default(false);

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
        Schema::dropIfExists('channel_partners');
    }
};
