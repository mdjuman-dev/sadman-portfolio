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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('dec');
            $table->integer('years')->unsigned();
            $table->integer('project_complete')->unsigned();
            $table->integer('natural_product')->unsigned();
            $table->integer('clients_reviews')->unsigned();
            $table->integer('satisfied_clientd')->unsigned();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
