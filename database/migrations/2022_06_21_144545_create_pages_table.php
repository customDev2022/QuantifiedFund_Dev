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
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string("slug")->unique();
            $table->longText('description')->nullable(); 
            $table->string('meta_title')->nullable(); 
            $table->longText('meta_description')->nullable(); 
            $table->string('meta_keywords')->nullable();
            $table->enum('status', ['Active', 'Inactive','Trash'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
