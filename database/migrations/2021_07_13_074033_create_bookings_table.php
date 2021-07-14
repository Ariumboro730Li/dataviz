<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
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
            $table->integer('duration');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('guest_title');
            $table->string('guest_firstname');
            $table->string('guest_lastname');
            $table->string('guest_email');
            $table->string('guest_age');
            $table->enum('guest_origin', ['foreign', 'domestic']);
            $table->enum('guest_type', ['family', 'solo', 'business', 'couple']);
            $table->enum('room_category', ['standard', 'superior', 'deluxe', 'junior suite', 'suite']);
            $table->enum('room_bed', ['twin', 'king']);
            $table->integer('room_price');
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('room_id');
            $table->timestamps();

            $table
                ->foreign('guest_id')
                ->references('id')
                ->on('guests')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('bookings');
    }
}
