<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCasesAttr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('cases', function (Blueprint $table) {
        //     $table->renameColumn('case_type', 'case_subject');
        // });

        // //add comments column
        // Schema::table('cases', function (Blueprint $table) {
        //     $table->text('comments')->afer('current_stage')->nullable();
        // });

        // Schema::table('cases', function (Blueprint $table) {
        //     $table->date('assignment_date')->nullable()->change();
        //     $table->date('hearing_date')->nullable()->change();
        //     $table->string('current_stage')->nullable()->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
