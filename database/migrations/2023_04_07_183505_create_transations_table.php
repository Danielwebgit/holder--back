<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transations', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('purchase_value', 10, 2);
            $table->decimal('sale_value', 10, 2);
            $table->string('description', 250);
            $table->date('transactionDuration');
            $table->decimal('ResultOfTheTransaction', 10, 2);

            $table->bigInteger('final_client_id')->unsigned();
            $table->foreign('final_client_id')->references('id')->on('final_clients');

            $table->bigInteger('customer_supplier_id')->unsigned();
            $table->foreign('customer_supplier_id')->references('id')->on('customer_suppliers');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('transations');
    }
}
