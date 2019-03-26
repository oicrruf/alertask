<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo');
            $table->integer('company_types_id')->references('id')->on('company_types')->onDelete('cascade')->unsigned();
            $table->string('address');
            $table->integer('citys_id')->references('id')->on('citys')->onDelete('cascade')->unsigned();;
            $table->string('lon');
            $table->string('lat');
            $table->integer('user_id')->unsigned();;
            $table->boolean('active');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companys');
    }
}
