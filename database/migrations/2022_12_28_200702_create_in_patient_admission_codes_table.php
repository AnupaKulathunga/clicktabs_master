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
        Schema::create('in_patient_admission_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('reference_code')->nullable()->unique();
            $table->string('name');
            $table->string('company_id');
            $table->boolean('active_status')->default(true);
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('in_patient_admission_codes');
    }
};
