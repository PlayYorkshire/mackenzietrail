<?php namespace JakeFeeley\MackenzieTour\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJakefeeleyMackenzietourEvents2 extends Migration
{
    public function up()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->text('body')->nullable();
            $table->string('county')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->dropColumn('body');
            $table->dropColumn('county');
        });
    }
}
