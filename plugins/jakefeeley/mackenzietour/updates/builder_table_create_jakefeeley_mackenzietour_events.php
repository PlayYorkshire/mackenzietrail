<?php namespace JakeFeeley\MackenzieTour\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJakefeeleyMackenzietourEvents extends Migration
{
    public function up()
    {
        Schema::create('jakefeeley_mackenzietour_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jakefeeley_mackenzietour_events');
    }
}
