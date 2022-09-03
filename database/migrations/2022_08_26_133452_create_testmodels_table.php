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
        Schema::create('testmodels', function (Blueprint $table) {
           $table->id();
           $table->timestamps();
           $table->string("brand", 30);
           $table->string("model", 30);
           $table->string("photo_filename");
           $table->integer("price");
           $table->integer("mileage")->default(0);
           $table->text("description");
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testmodels');
    }
};
