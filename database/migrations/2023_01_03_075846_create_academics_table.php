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
        Schema::create('academics', function (Blueprint $table) {
            $table->id('academic_id');
            $table->float('hifz-percentage')->nullable();
            $table->string('hifz-inst-name')->nullable();
            $table->date('hifz-Completion-date')->nullable();
            $table->float('jamia-percentage')->nullable();
            $table->string('jamia-inst-name')->nullable();
            $table->date('jamia-Completion-date')->nullable();
            $table->float('special-percentage')->nullable();
            $table->string('special-inst-name')->nullable();
            $table->date('special-Completion-date')->nullable();
            $table->dateTime('updated-at');
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
        Schema::dropIfExists('academics');
    }
};
