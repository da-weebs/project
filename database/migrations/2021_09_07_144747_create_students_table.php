<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;


class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courses_id')->constrained();
            $table->string('studname');
            $table->string('matric');
            $table->string('course');
            $table->string('email');
            $table->string('phone');
            $table->string('lecturername');
            $table->string('cohort');
            $table->string('sessionpsm');
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
        Schema::dropIfExists('students');
    }

}
