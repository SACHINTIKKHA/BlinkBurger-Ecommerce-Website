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
        Schema::create('item',function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('description');
            $table->string('amount');
            $table->string('image');
            $table->string('mode');
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
