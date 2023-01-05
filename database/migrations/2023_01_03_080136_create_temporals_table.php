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
        Schema::create('temporals', function (Blueprint $table) {
            $table->id('temporal_id');
            $table->float('SSE-Percentage');
            $table->string('SSE-Subjects');
            $table->string('SSE-Institute-name');
            $table->string('SSE-Board');
            $table->string('SSE-other-institute-name')->nullable();
            $table->date('SSE-Completion-Date');
            //Higher School Education columns
            $table->float('HSSE-Percentage');
            $table->string('HSSE-Subjects');
            $table->string('HSSE-Institute-name');
            $table->string('HSSE-Board');
            $table->string('HSSE-other-institute-name')->nullable();
            $table->date('HSSE-Completion-Date');
            //Bachelor(14-Year)
            $table->float('BA/BSC-Percentage');
            $table->string('BA/BSC-Subjects');
            $table->string('BA/BSC-Institute-name');
            $table->string('BA/BSC-Board');
            $table->string('BA/BSC-other-institute-name')->nullable();
            $table->date('BA/BSC-Completion-Date');
            // Masters / 16 Year BS(Hons)
            $table->float('MA/MSC/BS(Hons)-Percentage')->nullable();
            $table->string('MA/MSC/BS(Hons)-Subjects')->nullable();
            $table->string('MA/MSC/BS(Hons)-Institute-name')->nullable();
            $table->string('MA/MSC/BS(Hons)-Board')->nullable();
            $table->string('MA/MSC/BS(Hons)-other-institute-name')->nullable();
            $table->date('MA/MSC/BS(Hons)-Completion-Date')->nullable();
            // Mphil/MS
            $table->float('MS/Mphil-Percentage')->nullable();
            $table->string('MS/Mphil-Subjects')->nullable();
            $table->string('MS/Mphil-Institute-name')->nullable();
            $table->string('MS/Mphil-Board')->nullable();
            $table->string('MS/Mphil-other-institute-name')->nullable();
            $table->date('MS/Mphil-Completion-Date')->nullable();
            // PHD
            $table->float('PHD-Percentage')->nullable();
            $table->string('PHD-Subjects')->nullable();
            $table->string('PHD-Institute-name')->nullable();
            $table->string('PHD-Board')->nullable();
            $table->string('PHD-other-institute-name')->nullable();
            $table->date('PHD-Completion-Date')->nullable();
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
        Schema::dropIfExists('temporals');
    }
};
