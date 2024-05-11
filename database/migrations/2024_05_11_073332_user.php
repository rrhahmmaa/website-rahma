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

        Schema::create('user', function(Blueprint $table){
            
            $table-> id();
            $table->string ('username');
            $table->string('password');
        });

      
        Schema::create('sessions', function(Blueprint $table){

            $table->id();
            $table->foreignid('user_id')->nullable()->index();
            $table->string('ip_adres',45)->nullable();
            $table->text('user_agent',45)->nullable();   
            $table->longtext('payload');
            $table->string('last,activity')-> index ();
        });
        




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExistt('user');
        schema::dropIfExistt('password_reset_tokens');
        schema::dropIfExistt('sessions');
    }


};
