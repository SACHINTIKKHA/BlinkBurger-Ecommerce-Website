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
        Schema::create('order',function(Blueprint $table){
            $table->id();
            $table->string('customerid');
            $table->string('cgst');
            $table->string('sgst');
            $table->string('net');
            $table->string('afterdiscount');
            $table->string('code');
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
