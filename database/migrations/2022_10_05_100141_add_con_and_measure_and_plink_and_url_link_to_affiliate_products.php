<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('affiliate_products', function (Blueprint $table) {
            $table->integer('con')->default(0);
            $table->integer('measure')->default(0);
            $table->string('plink');
            $table->string('url_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('affiliate_products', function (Blueprint $table) {
            //
        });
    }
};
