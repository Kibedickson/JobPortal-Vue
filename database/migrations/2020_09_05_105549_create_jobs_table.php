<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('location');
            $table->longText('description');
            $table->string('category');
            $table->date('deadline');
            $table->unsignedBigInteger('employer_id');
            $table->foreign('employer_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->foreign('candidate_id')->references('id')->on('users')->onDelete('cascade');
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
