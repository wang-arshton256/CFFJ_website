<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolpollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolpolls', function (Blueprint $table) {
           $table->id();
            $table->integer('nursary');
            $table->integer('primary');
            $table->integer('secondary');
            $table->integer('vocation');
            $table->integer('university');
            $table->string('qn_2');
            $table->string('qn_3');
            $table->string('qn_3_a');
            $table->string('qn_4');
            $table->string('qn_5a');
            $table->string('qn_5b');
            $table->string('qn_5c');
            $table->string('qn_5d');
            $table->string('qn_6');
            $table->string('qn_7');
            $table->string('qn_8');


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
        Schema::dropIfExists('schoolpolls');
    }
}
