<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSubPostsContentHtml extends Migration
{

    public function up()
    {
        Schema::table('rainlab_blog_subposts', function($table)
        {
            $table->text('content_html');
        });
    }

    public function down()
    {
        Schema::table('rainlab_blog_subposts', function($table)
        {
            $table->dropColumn('content_html');
        });
    }
}
