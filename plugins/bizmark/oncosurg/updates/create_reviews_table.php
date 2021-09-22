<?php namespace BizMark\OncoSurg\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('bizmark_oncosurg_reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('desease_id')->nullable();
            $table->boolean('active')->index();
            $table->text('comment');
            $table->string('author')->index();
            $table->string('email')->index();
            $table->integer('rating');
            $table->text('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bizmark_oncosurg_reviews');
    }
}
