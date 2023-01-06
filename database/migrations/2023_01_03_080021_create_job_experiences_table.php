<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\JobController;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_experiences', function (Blueprint $table) {
        //    Professional experience 
            $table->id('jobexp_id');
            $table->string('Professional-job-Institue-name')->nullable();
            $table->string('Professional-job-Designation')->nullable();
            $table->date('Professional-job-Start-Date')->nullable();
            $table->date('Professional-job-End-Date')->nullable();
        // Volunteer Experience
            $table->string('Volunteer-work-institute-name')->nullable();
            $table->string('Volunteer-work-Designation')->nullable();
            $table->date('Volunteer-work-Start-Date')->nullable();
            $table->date('Volunteer-work-End-Date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_experiences');
    }
};
