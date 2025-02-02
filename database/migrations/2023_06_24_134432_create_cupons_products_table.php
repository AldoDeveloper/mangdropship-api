<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('cupons_products', function (Blueprint $table) {
            $table->foreignUuid('id_cupons')->constrained('cupons')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignUuid('id_product')->constrained('produks')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cupons_products');
    }
};
