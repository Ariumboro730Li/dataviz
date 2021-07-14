<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatisfactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satisfactions', function (Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('booking_id');
            $table->timestamps();

            $table
                ->foreign('guest_id')
                ->references('id')
                ->on('guests')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('booking_Id')
                ->references('id')
                ->on('bookings')
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
        Schema::dropIfExists('satisfactions');
    }
}
