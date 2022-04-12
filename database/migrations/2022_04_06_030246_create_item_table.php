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
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('price')->comment('価格');
            $table->string('gender');
            $table->string('categories1');
            $table->string('categories2');
            $table->string('designers');
            $table->string('made_in');
            $table->string('material');
            $table->number('XS')->commet('在庫');
            $table->number('S')->commet('在庫');
            $table->number('M')->commet('在庫');
            $table->number('L')->commet('在庫');
            $table->number('LL')->commet('在庫');
            $table->string('img_url1');
            $table->string('img_url2');
            $table->string('img_url3');
            $table->string('img_url4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
};
