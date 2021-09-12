<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_stages', function (Blueprint $table) {
            $table->id();
            $table->integer('case_ref');
            $table->string('case_id');
            $table->string('prev_stage')->nullable();
            $table->date('prev_stage_date')->nullable();
            $table->string('new_stage')->nullable();
            $table->date('new_stage_date')->nullable();
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
        Schema::dropIfExists('case_stages');
    }
}
