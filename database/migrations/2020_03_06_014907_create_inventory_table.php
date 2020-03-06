<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stock_num', 25);
            $table->string('vin', 25);
            $table->string('year', 5);
            $table->string('make', 35);
            $table->string('model', 35);
            $table->string('trim', 15)->nullable();
            $table->decimal('kms', 8, 0);
            $table->string('color', 35);
            $table->string('trans', 35);
            $table->decimal('price', 8, 0);
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
        Schema::dropIfExists('inventory');
    }
}
