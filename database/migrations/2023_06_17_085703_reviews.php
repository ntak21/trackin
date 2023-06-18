<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('reviewID');
            $table->bigInteger('userID')->unsigned()-> nullable();
            $table->bigInteger('kantinID')->unsigned()-> nullable();
            $table->text('review');
            $table->boolean('likes')->nullable();
            $table->timestamps();
        });

        Schema::table('reviews', function(Blueprint $table){
            $table->foreign('userID')->references('userID')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
    
            $table->foreign('kantinID')->references('kantinID')->on('kntins')
            ->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
