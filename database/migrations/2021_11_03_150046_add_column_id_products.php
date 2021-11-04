<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIdProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('categories_id')->unsigned()->after(('id'));
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('no action')->onUpdate('CASCADE');

            $table->integer('brand_id')->unsigned()->after(('categories_id'));
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('no action')->onUpdate('CASCADE');

            $table->integer('user_id')->unsigned()->after(('brand_id'));
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action')->onUpdate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
