<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsentFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consent_form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year');
            $table->string('ic');
            $table->string('matrix');
            $table->string('email');
            $table->string('mobileno');
            $table->date('filldate');
            $table->date('svname');
            $table->date('signdate');
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
        Schema::dropIfExists('consent_form');
    }
}
