<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdetail', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sname');
            $table->string('fname');
            $table->string('mname');
            $table->string('adhar');
            $table->longText('address');
            $table->string('gender');
            $table->string('category');
            $table->date('dob');
            $table->string('phone');
            $table->string('email');
            $table->string('class');
            $table->string('session');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentdetail');
    }
}
