<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_form', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('year');
            $table->string('ic');
            $table->string('matrix');
            $table->string('email');
            $table->string('mobileno');
            $table->string('svname');
            $table->string('project_title');
            $table->string('problem_solution');
            $table->string('objectives');
            $table->string('scopes');
            $table->string('software');
            $table->string('hardware');
            $table->string('method');
            $table->string('network');
            $table->string('security');
            $table->string('project_type');
            $table->string('project_area');
            $table->string('project_idea');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposal_form');
    }
}
