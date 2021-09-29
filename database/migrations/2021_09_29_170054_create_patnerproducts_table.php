<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatnerproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patnerproducts', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mainwarehouse');
            $table->string('serialnumber');
            $table->mediumtext('information');
            $table->boolean('stockable');
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
        Schema::dropIfExists('patnerproducts');
    }
}
