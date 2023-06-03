<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_requests', function (Blueprint $table) {
            $table->id();
             $table->string('type')->default("Response");
             $table->string('landlord_id')->nullable();
             $table->string('landlord_contact')->nullable();
             $table->string('landlord_email')->nullable();
             $table->string('renter_id')->nullable();
             $table->string('renter_name')->nullable();
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
        Schema::dropIfExists('response_requests');
    }
}
