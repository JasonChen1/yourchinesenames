<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('character');
            $table->string('pinyin');
            $table->mediumText('definition')->nullable();
            $table->string('radical')->nullable();
            $table->string('stroke_count')->nullable();
            $table->string('hsk_level')->nullable();
            $table->string('general_standard')->nullable();
            $table->string('frequency_rank')->nullable();
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
        Schema::dropIfExists('characters');
    }
}
