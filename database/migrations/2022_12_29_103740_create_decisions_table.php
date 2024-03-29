<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decisions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('logic');
            $table->float('analyst');
            $table->float('preasure');
            $table->float('programming');
            $table->float('mathematic');
            $table->enum('jalur', ['A', 'B', 'C'])->default('C');
            $table->string('job');
            $table->float('waktu');
            $table->bigInteger('total');
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
        Schema::dropIfExists('decisions');
    }
}
