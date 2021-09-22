<?php namespace BizMark\OncoSurg\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateBlogFields extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function (Blueprint $table) {
            $table->text('authors')->nullable();
            $table->string('journal')->nullable();
        });
    }

    public function down()
    {
        Schema::table('rainlab_blog_posts', function (Blueprint $table) {
            $table->dropColumn('authors');
            $table->dropColumn('journal');
        });
    }
}
