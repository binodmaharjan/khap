<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBridaVattaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::create('bridavatta', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('type');
        //     $table->integer('ward');
        //     $table->string('personalId');
        //     $table->string('memberId');
        //     $table->string('memberName');
        //     $table->string('gender');
        //     $table->integer('age');
        //     $table->string('birthDate');
        //     $table->string('citizenship');
        //     $table->string('regularAmount');
        //     $table->string('medicalAmount');
        //     $table->string('totalAmount');

        //     $table->timestamps();
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
        // Schema::dropIfExists('bridavatta');
    }
}
