<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('birthday');
            $table->integer('student_type_id');
            $table->integer('my_class_id');
            $table->integer('section_id');
            $table->string('nationality')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string('address')->nullable();
            $table->string('previous_institute');
            $table->integer('residence_phone_number');
            $table->string('Email')->nullable();
            $table->string('father_name');
            $table->integer('father_phonenumber');
            $table->string('transport')->nullable();
            $table->dateTime('admission_date');
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
        Schema::drop('admissions');
    }
}
