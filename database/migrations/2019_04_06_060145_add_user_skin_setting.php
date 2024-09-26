<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddUserSkinSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update the users table
        Schema::table('users', function ($table) {
            $table->string('skin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Update the users table
        Schema::table('users', function ($table) {
            $table->dropColumn('skin');
        });
    }
}
