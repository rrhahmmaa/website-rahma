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
        schema ::create ('admin',function (blueprint $table){
            $table->id();
           $table->string ('nama admin' ,45);
           $table->string('keterangan' ,45);
           $table->unsignedBigInteger('user_id');
           $table->foreign('user_id')->references ('id')->on('user')->onDelete('cascade');
           });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExist ('admin');
    }
};
