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
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('meta_title');
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('short_description');
            $table->text('key_features')->nullable();
            $table->longText('description')->nullable();
            $table->string('care_do')->nullable();
            $table->string('care_do_not')->nullable();
            $table->string('main_image_url');
            $table->float('mrp');
            $table->float('sale_price')->nullable();
            $table->float('discount_percent')->nullable();
            $table->timestamp('sale_start_date')->nullable();
            $table->timestamp('sale_end_date')->nullable();
            // product type like plant, pot etc
            $table->string('type'); 
            $table->enum('is_published',['yes','no']);
            $table->string('status')->default('available');
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
