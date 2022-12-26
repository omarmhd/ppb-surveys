<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrantSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currant_surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id')->constrained("surveys")->references("id");
            $table->foreignId('employee_id')->constrained("users")->references("id");
            $table->foreignId('evaluator_id')->constrained("users")->references("id");
            $table->string('version',20);
            $table->enum('status',['private','published'])->default('private');
            $table->enum("is_open",['0','1'])->default(0);
            $table->enum("is_evaluated",['0','1'])->default(0);
            $table->enum("is_accepted",['0','1'])->default(0);
            $table->integer("score")->default(0);
//            $table->enum("is_accepted",['0','1'])->default(0);
            $table->text("notes")->nullable();
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
        Schema::dropIfExists('currant_surveys');
    }
}
