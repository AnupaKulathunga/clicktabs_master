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
        Schema::create('drug_details', function (Blueprint $table) {
            $table->id();
            $table->integer('medication_count_sheet_id');
            $table->string('drug_name');
            $table->string('rx');
            $table->string('total_amount');
            $table->string('controlled_med');
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
        Schema::dropIfExists('drug_details');
    }
};
