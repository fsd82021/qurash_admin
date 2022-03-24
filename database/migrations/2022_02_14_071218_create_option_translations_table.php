<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('option_id');
            $table->string('value')->nullable();
            $table->string('locale')->index();
            $table->unique(['option_id', 'locale']);
            $table->foreign('option_id')->references('id')->on('options')->delete('cascade');
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
        Schema::dropIfExists('option_translations');
    }
}
