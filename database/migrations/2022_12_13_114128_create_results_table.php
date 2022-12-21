<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('currant_survey_id')->constrained("currant_surveys")->references("id");//
            $table->foreignId('question_id')->constrained("questions")->references("id");
            $table->foreignId('section_survey_id')->constrained("section_surveys")->references("id");
            $table->string("section_title");
            $table->string("question_title");
            $table->integer('score')->default(0);
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
        Schema::dropIfExists('results');
    }
}
