<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Shop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('shop', function (Blueprint $table) {
        //     $table->integer('shop_id')->index('shop_id')->autoIncrement();
        //     $table->string('shop_name',100);
        //     $table->string('shop_en', 50);
        //     $table->integer('shop_category')->default(1);
        //     $table->char('shop_postcode0', 3);
        //     $table->char('shop_postcode1', 4);
        //     $table->integer('shop_region')->default(1);
        //     $table->integer('shop_area')->default(13);
        //     $table->dateTime('datetime_col');
        //     $table->date('date_col');
        //     $table->time('time_col');
        //     $table->engine = 'InnoDB';
        //     $table->charset = 'utf8mb4';
        //     $table->collation = 'utf8mb4_general_ci';
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
