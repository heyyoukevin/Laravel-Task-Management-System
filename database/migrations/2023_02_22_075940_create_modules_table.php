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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("prjid");
            $table->foreign("prjid")->references("id")->on("projects")->onDelete("cascade");
            $table->string("mdtl");
            $table->string("tech");
            $table->string("sts");
            $table->string("desc");
            $table->string("stdt");
            $table->string("sttm");
            $table->string("endt");
            $table->string("entm");
            $table->string("hr");
            $table->string("mdasgn");
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
        Schema::dropIfExists('modules');
    }
};
