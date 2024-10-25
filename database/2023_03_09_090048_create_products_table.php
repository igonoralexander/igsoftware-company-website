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
            $table->bigIncrements('id');
            $table->bigInteger('cate_id');
            $table->string('product_name')->unique();
            $table->string('slug');
            $table->string('product_originalprice');
            $table->string('product_sellingprice');
            $table->mediumText('product_smalldesc');
            $table->longtext('product_bigdesc');
            $table->string('product_img1');
            $table->string('product_img2');
            $table->string('product_img3');
            $table->string('qty');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->mediumtext('meta_title');
            $table->mediumtext('meta_descp');
            $table->mediumtext('meta_keywords');

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
