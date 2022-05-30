<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');

            $table->bigInteger('idReceve');
            $table->string('destinate'); //User ou Amdin

            $table->float('price');
            $table->string('devise');
            $table->text('description');
            $table->string('paiement_method');
            $table->integer('statut');
            $table->string('date_operation');

            //Pour gérer les demandes coté admin
            $table->date('datePay')->nullable();
            $table->float('amount')->nullable();
            $table->boolean('reject')->default(false);
            $table->date('reject_date')->nullable();
            $table->string('reject_raison')->nullable();

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
        Schema::dropIfExists('deposits');
    }
}
