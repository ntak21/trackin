<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //function up() dijalankan saat menjalankan php artisan migrate

    public function up(): void
    {
        Schema::create('kntins', function (Blueprint $table) {
            $table->id('kantinID');
            $table->string('namaKantin');
            $table->text('alamat');
            $table->char('file');
            $table->char('buka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    //function down() dijalankan saat php artisan migrate:rollback
    public function down(): void
    {
        Schema::dropIfExists('kntins');
    }
};
