<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesapegoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desapego_produtos', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('descriptionProduct', 360);
            $table->float('priceProduct', 10, 2);
            $table->string('withdrawalState', 45);
            $table->string('withdrawalCity', 45);
            $table->string('withdrawalNeighborhood', 45);
            $table->string('image', 256)->nullable();
            $table->string('phone', 11);
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('user_name',300)->unique();
            $table->foreign('user_name')->references('name')->on('users');
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
        Schema::dropIfExists('desapego_produtos');
    }
}
