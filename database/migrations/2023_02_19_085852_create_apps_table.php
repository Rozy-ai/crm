<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('account_type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string(
                'account_name'
            )->nullable();
            $table->string(
                'mobile_phone'
            )->nullable();
            $table->string('email')->nullable();
            $table->string('business_name')->nullable();
            $table->string('vat_id')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('country')->nullable();
            $table->string(
                'address1'
            )->nullable();
            $table->string('city')->nullable();
            $table->string(
                'state'
            )->nullable();
            $table->string('postcode')->nullable();
            $table->string('card_name')->nullable();
            $table->string('iban_number')->nullable();


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
        Schema::dropIfExists('apps');
    }
}
