<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_responses', function (Blueprint $table) {
            $table->id();

            $table->string('type')->default("Request");
            $table->string('landlord_id')->nullable();
             $table->string('landlord_contact')->nullable();
             $table->string('landlord_email')->nullable();
             $table->string('mentenance_type')->nullable();
             $table->string('message')->nullable();
             $table->string('renter_id')->nullable();
             $table->string('renter_name')->nullable();

             $table->string('status')->nullable();
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
        Schema::dropIfExists('request_responses');
    }
}
