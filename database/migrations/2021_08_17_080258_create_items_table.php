<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('detail');
            $table->string('price');
            $table->string('thumb')->default('/images/item.jpg');
            $table->string('photo')->default('/images/item.jpg');
            $table->string('contents');
            $table->bigInteger('item_category_id')->unsigned();
            $table->foreign('item_category_id')->on('item_categories')->references('id');
            $table->string('tags');
            $table->boolean('is_fasting')->default(true);
            $table->integer('visit')->default(0);

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
        Schema::dropIfExists('items');
    }
}
