<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idea_name');
            $table->string('idea_theme');
            $table->string('idea_detail');
            $table->string('budget');
            $table->string('sales_tgt');
            $table->string('people');
            $table->string('people_qlt');
            $table->string('marketing');
            $table->string('sdgs_no');
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
        Schema::dropIfExists('idea');
    }
}
