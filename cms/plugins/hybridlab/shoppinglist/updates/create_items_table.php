<?php namespace Hybridlab\ShoppingList\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('hybridlab_shoppinglist_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hybridlab_shoppinglist_items');
    }
}
