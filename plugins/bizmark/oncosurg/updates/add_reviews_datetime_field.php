<?php namespace BizMark\OncoSurg\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateReviewsTable extends Migration
{
    public function up()
    {
        Schema::table('bizmark_oncosurg_reviews', function (Blueprint $table) {
            $table->timestamp('custom_date')->nullable();
        });
    }

    public function down()
    {
        Schema::table('bizmark_oncosurg_reviews', function (Blueprint $table) {
            $table->dropColumn('custom_date');
        });
    }
}
