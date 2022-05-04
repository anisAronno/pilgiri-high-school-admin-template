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
            $table->string("name_bn")->nullable();
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
            $table->string("education_others")->nullable();
            $table->string("village_name")->nullable();
            $table->string("post")->nullable();
            $table->string("upazila")->nullable();
            $table->string("district", )->nullable();
            $table->string("emergency_mobile")->nullable();
            $table->string("village_name_permanent")->nullable();
            $table->string("post_permanent")->nullable();
            $table->string("upazila_permanent")->nullable();
            $table->string("district_permanent")->nullable();
            $table->string("whatsup")->nullable();
            $table->string("facebook")->nullable();
            $table->string("guest")->nullable();
            $table->string("t_shirt")->nullable();
            $table->double("own_fee", 2)->nullable();
            $table->double("guest_fee", 2)->nullable();
            $table->double("total_fee", 2)->nullable();
            $table->string("payment_details")->nullable();
            $table->string("transection_id")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedTinyInteger('status')->default(2)->comment('0 => inactive, 1 => active, 2 => pending, 3 => freez, 4 => block');
            $table->string('password')->default('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
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
