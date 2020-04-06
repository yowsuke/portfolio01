<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('teamname');
            $table->string('category');
            $table->string('area');
            $table->integer('age');
            $table->integer('offence');
            $table->integer('diffence');
            $table->integer('stamina');
            $table->integer('technic');
            $table->integer('love');
            $table->text('introduce');
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
        Schema::dropIfExists('profiles');
    }
}
