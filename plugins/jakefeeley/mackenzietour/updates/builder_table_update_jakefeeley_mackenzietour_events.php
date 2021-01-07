<?php namespace JakeFeeley\MackenzieTour\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJakefeeleyMackenzietourEvents extends Migration
{
    public function up()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->text('slug');
            $table->string('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('date');
        });
    }
}
