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
            $table->tinyInteger('account_type');
            $table->string('first_name');
            $table->string('last_name');
            $table->string(
                'account_name'
            );
            $table->string(
                'mobile_phone'
            );
            $table->string('email');
            $table->string('business_name');
            $table->string('vat_id');
            $table->string('business_phone');
            $table->string('country');
            $table->string(
                'address1'
            );
            $table->string('city');
            $table->string(
                'state'
            );
            $table->string('postcode');
            $table->string('card_name');
            $table->string('iban_number');


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
