<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelledAppointmentsTable extends Migration
{
   
    public function up()
    {
        Schema::create('cancelled_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('justification')->nullable();

            $table->unsignedBigInteger('cancelled_by');
            $table->foreign('cancelled_by')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('appointment_id'); 
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
            
            

            $table->timestamps(); // created_at (cancelled_at), updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancelled_appointments');
    }
};
