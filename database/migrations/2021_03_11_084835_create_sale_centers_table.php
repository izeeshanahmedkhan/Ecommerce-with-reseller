<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner_name');
            $table->text('address');
            $table->string('city');
            $table->string('area');
            $table->string('contact');
            $table->text('picture_of_cnic');
            $table->string('messaging_service_name');
            $table->string('messaging_service_no');
            $table->string('email');
            $table->string('social_media_name_1');
            $table->string('social_media_name_2');
            $table->string('social_media_name_3');
            $table->string('link_1');
            $table->string('link_2');
            $table->string('link_3');
            $table->string('bank_account_title');
            $table->string('bank_name');
            $table->string('account_or_iban_no');
            $table->string('money_transfer_no');
            $table->string('money_transfer_service');
            $table->boolean('status');
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
        Schema::dropIfExists('sale_centers');
    }
}
