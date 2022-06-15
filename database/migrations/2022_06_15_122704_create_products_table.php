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
            $table->string('code')->nullable();
            $table
                ->string('denomination')
                ->comment('Наименование')
                ->nullable();
            $table->string('level_1')->nullable();
            $table->string('level_2')->nullable();
            $table->string('level_3')->nullable();
            $table->float('price')->nullable();
            $table->float('price_sp')->nullable();
            $table->string('total')->nullable();
            $table
                ->string('property_fields')
                ->comment('Поля свойств')
                ->nullable();
            $table
                ->string('joint_purchases')
                ->comment('Совместные покупки')
                ->nullable();
            $table
                ->string('unit')
                ->comment('Единица измерения')
                ->nullable();
            $table->string('image')->nullable();
            $table
                ->string('show_main')
                ->commnet('Выводить на главной')
                ->nullable();
            $table->text('description')->nullable();
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
