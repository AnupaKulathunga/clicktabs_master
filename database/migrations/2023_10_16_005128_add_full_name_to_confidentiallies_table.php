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
        Schema::table('confidentiallies', function (Blueprint $table) {
            $table->integer('org_id')->nullable()->after('id');
            $table->string('printName')->nullable()->after('org_id');
            $table->string('signature')->nullable()->after('printName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('confidentiallies', function (Blueprint $table) {
            $table->dropColumn('org_id');
            $table->dropColumn('printName');
            $table->dropColumn('signature');
        });
    }
};
