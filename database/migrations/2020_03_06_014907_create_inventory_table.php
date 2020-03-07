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
            $table->string('stock_num', 25)->nullable();
            $table->string('vin', 25)->nullable();
            $table->string('year', 5)->nullable();
            $table->string('make', 35)->nullable();
            $table->string('model', 35)->nullable();
            $table->string('trim', 15)->nullable();
            $table->decimal('kms', 8, 0)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('color', 65)->nullable();
            $table->string('trans', 65)->nullable();
            $table->string('dis', 5)->nullable();
            $table->string('dok', 5)->nullable();
            $table->string('page', 5)->nullable();
            $table->string('ad_num', 35)->nullable();
            $table->decimal('price', 8, 0)->nullable();
            $table->text('desc')->nullable();
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
