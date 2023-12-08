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
        Schema::create('ulogins', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("uname");
            $table->string("email");
            $table->string("mob");
            $table->string("add");
            $table->string("dept");
            $table->string("pass");
            $table->string("cpass");
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
        Schema::dropIfExists('ulogins');
    }
};
