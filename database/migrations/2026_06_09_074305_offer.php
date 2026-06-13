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
        Schema::create('offer',function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('discount');
            $table->string('offercode');
            $table->date('startdate');
            $table->date('enddate');
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
