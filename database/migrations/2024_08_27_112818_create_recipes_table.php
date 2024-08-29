<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('ingredients'); // Store as JSON, not text
            $table->json('instructions'); // Store as JSON, not text
            $table->string('image')->nullable();
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
    Schema::table('recipes', function (Blueprint $table) {
        $table->string('image')->nullable(false)->change();
    });
}

}
