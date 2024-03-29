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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string("logo")->nullable();
            $table->string("image")->nullable();
            $table->string("name", 150);
            $table->string("short_name", 20);
            $table->text("mission_statement");
            $table->string("website")->nullable();
            $table->mediumText("description")->nullable();
            $table->boolean("is_school")->default(false);
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
        Schema::dropIfExists('schools');
    }
};
