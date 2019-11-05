<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable(false);
            $table->string('email')->nullable()->change();
            $table->dropIndex('users_email_unique');
            $table->index('phone', 'users_phone_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex('users_phone_unique');
            $table->dropColumn(['phone']);
            $table->string('email')->nullable(false)->change();
            $table->index('email', 'users_email_unique');
        });
    }
}
