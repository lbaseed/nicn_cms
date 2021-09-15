<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_archives', function (Blueprint $table) {
            $table->id();
            $table->string('case_id');
            $table->string('termination_msg');
            $table->date('termination_date');
            $table->string('comment')->nullable();
            $table->string('archived_by');
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
        Schema::dropIfExists('case_archives');
    }
}
