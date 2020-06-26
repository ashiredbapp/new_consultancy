<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('current_location');
            $table->integer('experience_in_months');
            $table->string('functional_area');
            $table->string('roles');
            $table->string('industry');
            $table->string('key_skills');
            $table->string('education')->nullable();
            $table->string('company')->nullable();
            $table->string('resume_upload_link')->nullable();
            $table->boolean('resume_approve')->default(0);
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('job_seekers');
    }
}
