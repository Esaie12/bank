<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->text("content")->nullable();
            $table->string("author_type");// user,admin
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references('id')->on('users');
            $table->bigInteger('receiver_id')->unsigned();
            $table->foreign("receiver_id")->references('id')->on('users');
            $table->float("amount");
            $table->float("account_amount");
            $table->string("operation_type");
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
        Schema::dropIfExists('transactions');
    }
}
