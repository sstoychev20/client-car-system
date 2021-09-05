<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('make');
            $table->string('model');
            $table->string('client_name');
            $table->string('license_number');
            $table->string('year');
            $table->string('telephone');
            $table->string('reg_data');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->string('licence_no');
            $table->string('vin');
            $table->string('model');
            $table->string('make');
            $table->string('date');
            $table->timestamps();
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
