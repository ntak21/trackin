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
        Schema::create('menus', function (Blueprint $table) {
            $table->id('menuID');
            $table->bigInteger('kantinID')->unsigned();
            $table->string('namaMenu');
            $table->char('file');
            $table->integer('harga');
            $table->string('tag') -> nullable();
            $table->timestamps();
        });

        Schema::table('menus', function(Blueprint $table){
        $table->foreign('kantinID')->references('kantinID')->on('kntins')
        ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
