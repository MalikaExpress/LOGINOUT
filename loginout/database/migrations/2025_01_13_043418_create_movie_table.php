<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
       if(!Schema::hasTable('movie')){
        Schema::create('movie', function (Blueprint $table) {
            $table->integer("id")->autoIncrement();
            $table->string("title",100);
            $table->float("voteaverage");
            $table->string("overview");
            $table->string("posterpath");
            $table->integer("category_id");
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("category");
        });
       }
        
    } 
    
    /**
     * reverse the migrations
     * 
     *  @return void
     */

     public function down(): void
     {
        Schema::dropIfExists('movie');
     }

    
};
