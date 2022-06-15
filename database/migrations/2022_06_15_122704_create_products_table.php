<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->index('code');
            $table->string('denomination')->comment('Наименование');
            $table->string('level_1');
            $table->string('level_2');
            $table->string('level_3');
            $table->float('price');
            $table->float('price_sp');
            $table->integer('total');
            $table->string('property_fields')->comment('Поля свойств');
            $table->string('joint_purchases')->comment('Совместные покупки');
            $table->string('unit')->comment('Единица измерения');
            $table->string('image');
            $table->string('show_main')->commnet('Выводить на главной');
            $table->text('description');
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
        Schema::dropIfExists('products');
    }
}
