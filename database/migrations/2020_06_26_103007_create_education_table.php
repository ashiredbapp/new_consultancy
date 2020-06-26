<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_seekers_id')->nullable();
            $table->string('qualification');
            $table->string('course');
            $table->string('specialization');
            $table->string('university_college');
            $table->string('course_type');
            $table->integer('passing_year');
            $table->foreign('job_seekers_id')->references('id')->on('job_seekers');
            $table->softDeletes();
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
        Schema::dropIfExists('education');
    }
}
