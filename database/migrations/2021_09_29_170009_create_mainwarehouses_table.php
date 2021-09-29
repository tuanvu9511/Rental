<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainwarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainwarehouses', function (Blueprint $table) {
            $table->id();
            $table->integer('id_productspeciafication');
            $table->integer('id_productbrand');
            $table->integer('id_productcategory');
            $table->integer('id_supplier');
            $table->integer('quantity');
            $table->integer('quantityused');
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
        Schema::dropIfExists('mainwarehouses');
    }
}
