<?php namespace Captive\Skynet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateNotes extends Migration
{
    public function up()
    {
        if (Schema::hasTable('captive_notes_notes')) {
            return;
        }
        Schema::create('captive_notes_notes', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('target_type')->nullable();
            $table->integer('target_id')->nullable()->unsigned()->index();
            $table->string('name')->index();
            $table->mediumText('content')->nullable();
            $table->mediumText('additional_data')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('captive_notes_notes');
    }
}
