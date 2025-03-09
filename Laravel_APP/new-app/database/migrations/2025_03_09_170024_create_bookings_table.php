<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('train_id');
            $table->unsignedBigInteger('schedule_id');
            $table->integer('seats');
            $table->string('status');
            $table->unsignedBigInteger('payment_id')->nullable();

            // Foreign key constraints
            // $table->foreign('user_id')->references('id')->on('user_trains')->onDelete('cascade');
            // $table->foreign('train_id')->references('id')->on('train')->onDelete('cascade');
            // $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
            // $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
};
