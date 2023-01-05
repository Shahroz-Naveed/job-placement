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
        Schema::create('personals', function (Blueprint $table) {
            $table->id('personal_id') ;
            $table->string('name');
            $table->string('father-name');
            $table->string('email');
            $table->integer('height-in-feet');
            $table->integer('height-in-inches');
            $table->integer('weight');
            $table->date('Date Of Birth');
            $table->integer('CNIC');
            $table->string('Blood-Group');
            $table->string('Marital Status');
            $table->string('Gender');
            $table->string('pic');
            $table->dateTime('updated at');
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
        Schema::dropIfExists('personals');
    }
};
