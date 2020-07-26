<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_name');
            $table->string('slug_name');
            $table->string('images');
            $table->integer('company_user_id');
            $table->integer('job_category_id');
            $table->integer('id_zone');
            $table->string('email_get_cv');
            $table->string('address');
            $table->string('deadline_job');
            $table->integer('amount_people');
            $table->string('formality');
            $table->string('experience');
            $table->string('gender');
            $table->mediumText('job_desc');
            $table->string('salary_type');
            $table->string('salary_form');
            $table->string('salary_to')->nullable();
            $table->mediumText('interest');
            $table->integer('status');
            $table->mediumText('request');
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
        Schema::dropIfExists('jobs');
    }
}
