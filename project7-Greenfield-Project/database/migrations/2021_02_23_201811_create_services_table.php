<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('service_id');
            $table->unsignedBigInteger('center_id');
            $table->string('service_name');
            $table->longText('service_desc');
            $table->string('service_type');
            $table->text('service_image');
            $table->float('service_price');
            $table->foreign('center_id')->references('center_id')->on('training_centers')
                  ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('services');
    }
}
