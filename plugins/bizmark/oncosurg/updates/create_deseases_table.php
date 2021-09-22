<?php namespace BizMark\OncoSurg\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDeseasesTable extends Migration
{
    public function up()
    {
        Schema::create('bizmark_oncosurg_deseases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('name')->index();
            $table->string('slug')->index();
            $table->text('information')->nullable();
            $table->text('clinic_watch')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bizmark_oncosurg_deseases');
    }
}
