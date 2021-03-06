<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceStatus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('invoice_status', function ($table) {
                $table->increments('id');
                $table->string('name');
                $table->boolean('is_delete')->default(0);;
                $table->timestamps();
                $table->integer('created_by')->default(1);
                $table->integer('updated_by')->default(1);
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
            Schema::drop('invoice_status');
	}

}
