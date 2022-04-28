<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestedEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requested_events', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('image');
            $table->text('description');
            $table->dateTime('start_time',0);
            $table->dateTime('end_time',0);
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->foreignId('place_id');
            $table->enum('status',['Y','N','P']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requested_events');
    }
}
