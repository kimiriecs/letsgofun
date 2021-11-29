<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('digit');
            $table->mediumText('description');
            $table->timestamps();
            $table->softDeletes();
          });

          Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('order_status_id')->default(1)->constrained('order_statuses')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
