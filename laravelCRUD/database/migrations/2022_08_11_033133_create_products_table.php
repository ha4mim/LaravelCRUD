<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->string("pName");
            $table->string("pDes")->nullable();
            $table->string("pCat");
            $table->string("pScat")->nullable();
            $table->integer("pPrice");
            $table->integer("pStatus")->comment("1 for Active 2 for Inactive 3 for Ending ");
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
};
