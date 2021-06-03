<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel', function (Blueprint $table) {
            $table->id();
            /**
             * firstname
             * lastname
             * middlename
             * age
             * gender
             * birthday
             * 
             */
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('age');
            $table->enum('gender',[
                'Male', 'Female'
            ]);
            $table->date('birthday');
            $table->integer('contact');
            $table->longText('address');
            //no data will be delete permanently
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
        Schema::dropIfExists('personnel');
    }
}
