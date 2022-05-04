<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string("name-bn")->nullable();
            $table->string("fathers-name")->nullable();
            $table->string("mothers-name")->nullable();
            $table->string("spouse-name")->nullable();
            $table->string("blood-group")->nullable();
            $table->string("birth-date")->nullable();
            $table->string("nationality")->nullable();
            $table->string("nid")->nullable();
            $table->string("ssc")->nullable();
            $table->string("last-educational-qualification")->nullable();
            $table->string("education-others")->nullable();
            $table->string("village-name")->nullable();
            $table->string("post")->nullable();
            $table->string("upazila")->nullable();
            $table->string("district", )->nullable();
            $table->string("emergency-mobile")->nullable();
            $table->string("village-name-permanent")->nullable();
            $table->string("post-permanent")->nullable();
            $table->string("upazila-permanent")->nullable();
            $table->string("district-permanent")->nullable();
            $table->string("whatsup")->nullable();
            $table->string("facebook")->nullable();
            $table->string("event-registration-github")->nullable();
            $table->string("t-shirt")->nullable();
            $table->string("own-fee")->nullable();
            $table->string("guest-fee")->nullable();
            $table->string("total-fee")->nullable();
            $table->string("payment_details")->nullable();
            $table->string("transection_id")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedTinyInteger('status')->default(2)->comment('0 => inactive, 1 => active, 2 => pending, 3 => freez, 4 => block');
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
