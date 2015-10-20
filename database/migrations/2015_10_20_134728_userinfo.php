<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfo', function($table)
        {
            $table->increments('id')->index();
            $table->integer('userid');
            $table->string('email');
            $table->string('loginname');
        });
        
        Schema::create('useraccess', function($table)
        {
            $table->increments('id')->index();
            $table->integer('userid');
            $table->string('oauthtoken');
            $table->string('oauthtokensecret');
            $table->timestamps('last_access');
        });
        
        Schema::create('userapikey', function($table)
        {
            $table->increments('id')->index();
            $table->integer('userid');
            $table->string('secretkey');
        });
        
        Schema::create('userapikeymapping', function($table)
        {
            $table->increments('id')->index();
            $table->integer('hostuserid');
            $table->integer('borrowerid');
            $table->boolean('active');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('userinfo');
        Schema::drop('useraccess');
        Schema::drop('userapikey');
        Schema::drop('userapikeymapping');
    }
}
