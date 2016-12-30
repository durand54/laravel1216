<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFdidregistryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdidregistry', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FDID');
            $table->string('FireDeptName');
            $table->string('HQAddress1');
            $table->string('HQAddress2');
            $table->string('HQCity');
            $table->string('HQState');
            $table->string('HQZip');
            $table->string('MailAddress1');
            $table->string('MailAddress2');
            $table->string('MailPOBox');
            $table->string('MailCity');
            $table->string('MailState');
            $table->string('MailZip');
            $table->string('HQPhone');
            $table->string('HQFax');
            $table->string('County');
            $table->string('DeptType');
            $table->string('OrganizationType');
            $table->string('Website');
            $table->string('NumberOfStations');
            $table->string('ActiveFirefightersCareer');
            $table->string('ActiveFirefightersVolunteer');
            $table->string('ActiveFirefightersPaidPerCall');
            $table->string('NonFirefightingCivilian');
            $table->string('NonFirefightingVolunteer');
            $table->boolean('PrimaryAgencyForEM');
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
        Schema::dropIfExists('fdidregistry');
    }
}
