<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createvenues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table venues {vname, vblock, vtype}
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //additional fields/row
            $table->string('vname');
            $table->string('vblock');
            $table->string('vtype');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //rollback
        Schema::dropIfExists('venues');
    }
}
