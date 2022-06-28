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
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description'); 
            $table->string('portfolio_id');
            $table->longText('fund_objective');
            $table->longText('fund_focus');
            $table->longText('fund_description');
            $table->string("fact_sheet_link");
            $table->string("qtr");
            $table->string("ytd");
            $table->string("one_year");
            $table->string("three_year");
            $table->string("five_year");
            $table->string("since_inception");
            $table->string("index_name");
            $table->string("set_date");
            $table->string("expense_ratio");
            $table->longText('disclaimers'); 
            $table->binary('featured_image')->nullable();
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
        Schema::dropIfExists('funds');
    }
};
