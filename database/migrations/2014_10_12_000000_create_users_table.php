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
            $table->string('p_name');
            $table->string('f_name');
            $table->string('m_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('suffix')->nullable();

            $table->string('contact_number');
            $table->string('contact_alt')->nullable();
        

            $table->string('present_address');
            $table->string('residential_address');

            $table->string('gender');
            $table->string('blood_group');

            $table->string('date_of_birth');
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_death')->nullable();
            $table->string('date_of_ordination');

            $table->string('designation');
            $table->string('commision');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('text_password');
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
