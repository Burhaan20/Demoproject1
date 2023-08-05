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
        Schema::create('selldatas', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->bigInteger('tid')->unsigned();
            $table->integer('price');
            $table->string('img');
            $table->string('disc');
            $table->foreign('tid')->reference('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('selldatas');
    }
};
