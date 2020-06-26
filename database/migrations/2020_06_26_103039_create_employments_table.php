<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_seekers_id')->nullable();
            $table->string('designation');
            $table->string('company');
            $table->integer('annual_salary');
            $table->date('working_since');
            $table->integer('duration_of_notice_period');
            $table->boolean('serving_notice_period');
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
        Schema::dropIfExists('employments');
    }
}
