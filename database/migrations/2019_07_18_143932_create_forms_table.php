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
            $table->string('subject1')->nullable();
            $table->string('subject2')->nullable();
            $table->string('subject3')->nullable();
            $table->string('subject4')->nullable();
            $table->string('subject5')->nullable();
            $table->string('subject6')->nullable();
            $table->string('subject7')->nullable();
            $table->string('subject8')->nullable();
            $table->string('subject9')->nullable();
            $table->string('subject10')->nullable();
            $table->string('grade1')->nullable();
            $table->string('grade2')->nullable();
            $table->string('grade3')->nullable();
            $table->string('grade4')->nullable();
            $table->string('grade5')->nullable();
            $table->string('grade6')->nullable();
            $table->string('grade7')->nullable();
            $table->string('grade8')->nullable();
            $table->string('grade9')->nullable();
            $table->string('grade10')->nullable();
            $table->string('school_of_choice');
            $table->string('choice_of_center');
            $table->string('passport');
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
