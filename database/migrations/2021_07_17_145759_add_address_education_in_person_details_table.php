<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressEducationInPersonDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('person_details', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->enum('gender',['MALE','FEMALE'])->default('MALE');
            $table->string('education')->nullable();
            $table->string('occupation')->nullable();
            $table->string('health')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('person_details', function (Blueprint $table) {
            //
        });
    }
}
