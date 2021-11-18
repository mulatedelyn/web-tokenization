<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEnrollments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname', 60)->nullable();
            $table->string('Middlename', 60)->nullable();
            $table->string('Lastname', 60)->nullable();
            $table->date('Birthdate')->nullable();
            $table->string('Gender', 12)->nullable();
            $table->string('Address', 500)->nullable();
            $table->string('Citizenship', 50)->nullable();
            $table->string('Religion', 50)->nullable();
            $table->string('Last_School_Attended', 500)->nullable();
            $table->date('Date_Graduated')->nullable();
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
        Schema::dropIfExists('enrollments');
    }
}
