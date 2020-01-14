<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMainMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_main_menus', function (Blueprint $table) {
            $table->Increments('id')->unsigned();
            $table->Integer('RoleId')->unsigned();
            $table->string('MainMenu');
            $table->string('Url')->nullable();
            $table->timestamps();

            $table->foreign('RoleId')
                ->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_main_menus');
    }
}