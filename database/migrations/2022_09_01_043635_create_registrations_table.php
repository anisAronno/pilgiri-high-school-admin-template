<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string("picture")->nullable();
            $table->string("fathers_name")->nullable();
            $table->string("mothers_name")->nullable();
            $table->string("spouse_name")->nullable();
            $table->string("blood_group")->nullable();
            $table->date("birth_date")->nullable();
            $table->string("nationality")->nullable();
            $table->string("nid")->nullable();
            $table->integer("ssc")->nullable();
            $table->string("last_educational_qualification")->nullable();
            $table->string("last_educational_institution")->nullable();
            $table->string("village_name")->nullable();
            $table->string("post")->nullable();
            $table->string("upazila")->nullable();
            $table->string("district", )->nullable();
            $table->string("emergency_mobile")->nullable();
            $table->string("whatsup")->nullable();
            $table->string("facebook")->nullable();
            $table->string("guest")->nullable();
            $table->string("t_shirt")->nullable();
            $table->double("own_fee", 2)->nullable();
            $table->double("guest_fee", 2)->nullable();
            $table->double("total_fee", 2)->nullable();
            $table->string("payment_details")->nullable();
            $table->string("transection_id")->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('status')->default(2)->comment('0 => inactive, 1 => active, 2 => pending, 3 => freez, 4 => block');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
