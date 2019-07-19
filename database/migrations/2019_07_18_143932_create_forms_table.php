<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('sex');
            $table->string('address');
            $table->string('lga');
            $table->string('state');
            $table->string('last_school');
            $table->string('basic_cert_no');
            $table->string('subject1');
            $table->string('subject2');
            $table->string('subject3');
            $table->string('subject4');
            $table->string('subject5');
            $table->string('subject6');
            $table->string('subject7');
            $table->string('subject8');
            $table->string('subject9');
            $table->string('subject10');
            $table->string('grade1');
            $table->string('grade2');
            $table->string('grade3');
            $table->string('grade4');
            $table->string('grade5');
            $table->string('grade6');
            $table->string('grade7');
            $table->string('grade8');
            $table->string('grade9');
            $table->string('grade10');
            $table->string('school_of_choice');
            $table->string('choice_of_center');
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
        Schema::dropIfExists('forms');
    }
}
