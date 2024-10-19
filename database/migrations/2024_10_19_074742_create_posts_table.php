<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->text('content');
        $table->string('topic');
        $table->string('tags')->nullable();
        $table->timestamps();
        
        // Foreign key relationship
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

};
