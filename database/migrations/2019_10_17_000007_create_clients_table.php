<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('registration');

            $table->string('address');

            $table->string('phone')->nullable();

            $table->string('neighbour1')->nullable();

            $table->string('neighbour2')->nullable();

            $table->string('neighbour3')->nullable();

            $table->string('neighbour4')->nullable();

            $table->string('verified_by')->nullable();

            $table->boolean('is_verified')->default(0)->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
