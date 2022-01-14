<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("username")->unique();
            $table->string("password");
            $table->char("status")->default("A")
            ->comment("A= active, I= inactve");
            $table->string("f_name");
            $table->string("f_nameB");
            $table->string("gender");
            $table->string("blood");
            $table->date("dob");
            $table->string("present_adress");
            $table->string("mobile");
            $table->string("email")->unique();
            $table->string("fb_link");
            $table->string("ju_batch");
            $table->string("iit_batch");
            $table->string("hor")->comment("hor = Hall of Residence");
            $table->string("ac_session")->comment("Academic Session");
            $table->string("degree_obt");
            $table->string("occupation");
            $table->string("designation");
            $table->string("organization");
            $table->string("adress_org");
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
        Schema::dropIfExists('users');
    }
}
