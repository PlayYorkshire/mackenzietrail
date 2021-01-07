<?php namespace JakeFeeley\MackenzieTour\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJakefeeleyMackenzietourEvents3 extends Migration
{
    public function up()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->text('map')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->dropColumn('map');
        });
    }
}
