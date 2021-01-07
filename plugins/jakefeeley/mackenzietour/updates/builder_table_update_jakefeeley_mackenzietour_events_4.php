<?php namespace JakeFeeley\MackenzieTour\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJakefeeleyMackenzietourEvents4 extends Migration
{
    public function up()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->string('price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jakefeeley_mackenzietour_events', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
