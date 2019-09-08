<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExpertColumnToProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productions', function (Blueprint $table) {
            $table->float('expert')->nullable();
            $table->integer('minimum_order')->nullable();
            $table->integer('from_amount_production')->nullable();
            $table->integer('before_amount_prod')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productions', function (Blueprint $table) {
            $table->dropColumn(['expert', 'minimum_order', 'from_amount_production', 'before_amount_prod']);
        });
    }
}
