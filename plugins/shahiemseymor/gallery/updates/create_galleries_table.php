<?php namespace ShahiemSeymor\Poll\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePollVotesTable extends Migration
{

    public function up()
    {
        Schema::create('shahiemseymor_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('shahiemseymor_galleries');
    }

}
