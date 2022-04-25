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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('country')->nullable();
            $table->string('ken')->nullable();
            $table->string('shikushoson')->nullable();
            $table->integer('post_number')->nullable();
            $table->integer('phone')->nullable();
            $table->boolean('mail_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('country');
            $table->dropColumn('ken');
            $table->dropColumn('shikushoson');
            $table->dropColumn('post_number');
            $table->dropColumn('phone');
            $table->dropColumn('mail_status');
        });
    }
};
