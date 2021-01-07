<?php namespace JakeFeeley\MackenzieTour\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJakefeeleyMackenzietourPosts extends Migration
{
    public function up()
    {
        Schema::create('jakefeeley_mackenzietour_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title')->nullable();
            $table->text('body')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jakefeeley_mackenzietour_posts');
    }
}
